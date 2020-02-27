@extends('twill::layouts.form')

@section('contentFields')

    @formField('medias', [
        'name' => 'screengrab',
        'label' => 'Screen grab',
        'note' => 'Show your website ata desktop breakpoint.'
    ])

    @formField('input', [
        'name' => 'headline',
        'label' => 'Headline',
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'url',
        'label' => 'Website URL',
        'maxlength' => 200
    ])

    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Project description',
        'style' => 'border: 2px solid red;',
        'toolbarOptions' => [
        ['header' => [2, 3, false]],
        'bold',
        'italic',
        'blockquote',
        'link',
        'clean',
        ],
        'placeholder' => 'Description text',
        'maxlength' => 1100,
        'rows' => 10,
        'note' => 'Describe some of the challenges.',
 ])

@stop
