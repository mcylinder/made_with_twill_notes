<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-textfield label="Project Title" :name="fieldName('project_title')" type="text" :maxlength="200" in-store="value" ></a17-textfield><a17-textfield label="Project Url" :name="fieldName('project_url')" type="text" :maxlength="200" in-store="value" ></a17-textfield><a17-inputframe label="Image" name="medias.past_project_image" > <a17-mediafield :name="fieldName('past_project_image')" crop-context="past_project_image" ></a17-mediafield> </a17-inputframe> <a17-wysiwyg label="Project description" :name="fieldName('project_description')" note="Describe the project." :options='{"modules":{"toolbar":["bold","italic","blockquote","link","clean"],"syntax":false}}' placeholder='Description text' :maxlength='1100' in-store="value" ></a17-wysiwyg>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
