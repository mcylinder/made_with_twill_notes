<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-inputframe label="Image" name="medias.past_image" > <a17-mediafield :name="fieldName('past_image')" crop-context="past_image" ></a17-mediafield> </a17-inputframe> 
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
