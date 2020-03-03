<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-textfield label="Quote text" :name="fieldName('text')" type="text" placeholder="A real professional to work with.." in-store="value" ></a17-textfield>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
