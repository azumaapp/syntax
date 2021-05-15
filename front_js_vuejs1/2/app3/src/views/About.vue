<template>
  <div class="about">
    <h1>This is an about page</h1>

    <!-- props1 -->
    <!-- <C1 title="about title" /> -->

    <!-- props2 -->
    <!-- 타이틀 지정안한 경우 default 가 뜨게함 -->
    <C1 />
  </div>
</template>

<script>
import C1 from "@/components/C1.vue";
export default {
  components: {
    C1,
  },
};
</script>
