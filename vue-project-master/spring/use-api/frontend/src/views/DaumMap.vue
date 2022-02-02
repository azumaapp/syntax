<template>

  <v-card
  
    class="mx-auto"
    max-width="500"
  >
  <v-text-field v-model="searchKey"></v-text-field>
  <v-btn @click="searchMap">Search</v-btn>
  
  <vue-daum-map
        :appKey="appKey"
        :center.sync="center"
        :level.sync="level"
        :mapTypeId="mapTypeId"
        :libraries="libraries"
        @load="onLoad"
        style="width:500px;height:400px;"/>
    <v-list>
      <v-list-item-group>
        <v-list-item
          v-for="(item, i) in items"
          :key="i"
          :disabled="item.disabled"
        >
          <v-list-item-content>
            <v-list-item-title v-text="item.address_name" @click="test(item.x, item.y)"></v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list-item-group>
    </v-list>
  </v-card>
</template>

<script>
import VueDaumMap from 'vue-daum-map'
import { async } from 'q';
export default {
  components: {VueDaumMap},
  data: () => ({
    searchKey: "",
    appKey: 'd89634deae63af881f36e4d849263aae',
    // center: {lat:33.450701, lng:126.570667}, // 지도의 중심 좌표
    // center: {lat:37.4812055, lng:126.8848372}, // 지도의 중심 좌표
    center: {lat:35.97664845766847, lng:126.99597295767953}, // 지도의 중심 좌표
    level: 3, // 지도의 레벨(확대, 축소 정도),
    mapTypeId: VueDaumMap.MapTypeId.NORMAL, // 맵 타입
    libraries: [], // 추가로 불러올 라이브러리
    map: null, // 지도 객체. 지도가 로드되면 할당됨.
    items: [],
  }),
  methods: {
    onLoad: function(map) {
      this.map = map
    },
    searchMap: function() {
      this.items = [];
      axios.get('https://dapi.kakao.com/v2/local/search/keyword.json?query='+this.searchKey, {
        headers: {
          Authorization: `KakaoAK 1026731d07732a439790b2935243d042`
        }
      }).then(result => {
        console.log(result);
        const datas = result.data.documents;
        this.items.push(...datas);
      }).catch(err => {
        console.log(err);
      })
    },
    test: function(x, y) {
      this.center.lat=y;
      this.center.lng=x;
    }
  }, 
  created() {
    console.log(VueDaumMap)
  }
}
</script>
