@formField('input', [
'name' => 'project_title',
'label' => 'Project Title',
'maxlength' => 200
])

@formField('input', [
'name' => 'project_url',
'label' => 'Project Url',
'maxlength' => 200
])

@formField('medias', [
'name' => 'past_project_image',
'label' => 'Image',
])

@formField('wysiwyg', [
'name' => 'project_description',
'label' => 'Project description',
'toolbarOptions' => [
'bold',
'italic',
'blockquote',
'link',
'clean',
],
'placeholder' => 'Description text',
'maxlength' => 1100,
'rows' => 5,
'note' => 'Describe the project.',
])
