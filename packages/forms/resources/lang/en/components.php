<?php

return [

    'actions' => [

        'modal' => [

            'requires_confirmation_subheading' => 'Are you sure you would like to do this?',

            'buttons' => [

                'cancel' => [
                    'label' => 'Cancel',
                ],

                'confirm' => [
                    'label' => 'Confirm',
                ],

                'submit' => [
                    'label' => 'Submit',
                ],

            ],

        ],

    ],

    'builder' => [

        'buttons' => [

            'create_item' => [
                'label' => 'Add to :label',
            ],

            'create_item_between' => [
                'label' => 'Add between',
            ],

            'delete_item' => [
                'label' => 'Delete',
            ],

            'move_item' => [
                'label' => 'Move',
            ],

            'move_item_down' => [
                'label' => 'Move down',
            ],

            'move_item_up' => [
                'label' => 'Move up',
            ],

        ],

    ],

    'key_value' => [

        'buttons' => [

            'add' => [
                'label' => 'Add Row',
            ],

            'delete' => [
                'label' => 'Delete Row',
            ],

        ],

        'fields' => [

            'key' => [
                'label' => 'Key',
            ],

            'value' => [
                'label' => 'Value',
            ],

        ],

    ],

    'markdown_editor' => [

        'toolbar_buttons' => [
            'attach_files' => 'Attach files',
            'bold' => 'Bold',
            'bullet_list' => 'Bullet list',
            'code_block' => 'Code block',
            'edit' => 'Edit',
            'italic' => 'Italic',
            'link' => 'Link',
            'ordered_list' => 'Numbered list',
            'preview' => 'Preview',
            'strike' => 'Strikethrough',
        ],

    ],

    'repeater' => [

        'buttons' => [

            'create_item' => [
                'label' => 'Add to :label',
            ],

            'delete_item' => [
                'label' => 'Delete',
            ],

            'move_item_down' => [
                'label' => 'Move down',
            ],

            'move_item_up' => [
                'label' => 'Move up',
            ],

        ],

    ],

    'rich_editor' => [

        'dialogs' => [

            'link' => [

                'buttons' => [
                    'link' => 'Link',
                    'unlink' => 'Unlink',
                ],

                'label' => 'URL',

                'placeholder' => 'Enter a URL',

            ],

        ],

        'toolbar_buttons' => [
            'attach_files' => 'Attach files',
            'blockquote' => 'Blockquote',
            'bold' => 'Bold',
            'bullet_list' => 'Bullet list',
            'code_block' => 'Code block',
            'h1' => 'Title',
            'h2' => 'Heading',
            'h3' => 'Subheading',
            'italic' => 'Italic',
            'link' => 'Link',
            'ordered_list' => 'Numbered list',
            'redo' => 'Redo',
            'strike' => 'Strikethrough',
            'undo' => 'Undo',
        ],

    ],

    'select' => [

        'actions' => [

            'create_option' => [

                'modal' => [

                    'heading' => 'Create',

                    'actions' => [

                        'create' => [
                            'label' => 'Create',
                        ],

                    ],

                ],

            ],

        ],

        'loading_message' => 'Loading...',

        'no_search_results_message' => 'No options match your search.',

        'placeholder' => 'Select an option',

        'searching_message' => 'Searching...',

    ],

    'tags_input' => [
        'placeholder' => 'New tag',
    ],

];
