
<template>
  <v-row>
    <v-col>
      <v-card color="grey lighten-4" flat height="200px">
        <v-toolbar class="primary" :dark="true">
          <v-app-bar-nav-icon></v-app-bar-nav-icon>
          <v-toolbar-title>
            <v-text-field
              flat
              solo-inverted
              hide-details
              label="Search"
              class="hidden-sm-and-down"
              v-model="searchName"
            ></v-text-field>
          </v-toolbar-title>
          <div class="flex-grow-1"></div>
          <v-btn icon>
            <v-icon @click="searchResult">mdi-magnify</v-icon>
          </v-btn>
          <v-btn icon>
            <v-icon>mdi-heart</v-icon>
          </v-btn>
          <v-btn icon>
            <v-icon>mdi-dots-vertical</v-icon>
          </v-btn>
        </v-toolbar>
      </v-card>
      <div class="filterbox">
		    <p class="total" v-model="items">{{ items.length }} items</p>
        <div class="prd_search">
		
          <ul class="prd_basic col3" id="prd_basic"><li v-for="item in items"><div class="box ">
            <div class="img">
              <div class="prdimg" v-html="item.titleImg"></div>
            </div>
            <div class="info">
              <p class="name">
                <a href='https://www.concepts1one.co.kr/shop/detail.php?pno=E820A45F1DFC7B95282D10B6087E11C0&amp;rURL=https%3A%2F%2Fwww.concepts1one.co.kr%2Fshop%2Fsearch_result.php%3Fsearch_str=${item.productName}&amp;ctype=1&amp;cno1='>{{item.productName}}</a>
              </p>
              <div class="price">
                <span class="sell">{{ item.salePrice.toLocaleString() }} 원</span>
                <span class="consumer">{{ item.costPrice.toLocaleString() }} 원</span>
              </div>
            </div>
          </div></li>	
          </ul>
	      </div>
      </div>
    </v-col>
  </v-row>
</template>

<script>
  export default {
    data () {
      return {
        searchName: "",
        items: []
      }
    },
    
    methods: {
      searchResult () {
        
        axios.get(`http://127.0.0.1:3000?search=${this.searchName}`, {
        }).then((res) => {

          const results = res.data;
          const addResult = this.items.concat(results);
          this.items = addResult;
        }) // axios
      } // searchResult
    } // method
  }
</script>

