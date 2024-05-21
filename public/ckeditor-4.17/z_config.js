/**
 * @license Copyright (c) 2003-2022, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */
var ckEditorContentCss;

if (jQuery) {
    if ($("link#ckEditorContentCss").length > 0)
        ckEditorContentCss = $("link#ckEditorContentCss").attr("href");
    else
        console.log("CKEditor config: No meta tag for CKEditor content!");
} else {
    console.log("CKEditor config: No jQuery loaded!");
}

CKEDITOR.editorConfig = function( config ) {
    config.toolbarGroups = [
        {name: 'document', groups: ['mode', 'document', 'doctools']},
        {name: 'clipboard', groups: ['clipboard', 'undo']},
        {name: 'forms', groups: ['forms']},
        '/',
        {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
        {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph']},
        {name: 'links', groups: ['links']},
        {name: 'insert', groups: ['insert']},
        {name: 'styles', groups: ['styles']},
        {name: 'colors', groups: ['colors']},
        {name: 'tools', groups: ['tools']},
        {name: 'others', groups: ['others']},
        {name: 'about', groups: ['about']}
    ];
    config.removeButtons = 'Form,Radio,TextField,Checkbox,Textarea,Select,Button,ImageButton,HiddenField,About,Maximize,ShowBlocks,Language';
    config.height = '450px';
    config.extraPlugins = 'youtube';
    config.youtube_responsive = true;
    config.allowedContent = true;
    config.filebrowserImageBrowseUrl = document.location.hostname + '/laravel-filemanager?type=training-program';
    config.filebrowserImageUploadUrl = document.location.hostname + '/laravel-filemanager?type=training-program&_token=';
    config.filebrowserBrowseUrl = document.location.hostname + '/laravel-filemanager?type=training-program';
    config.filebrowserUploadUrl = document.location.hostname + '/laravel-filemanager/uploads?type=training-program&_token=';
    config.contentsCss = ckEditorContentCss;
    // config.contentsCss = ["https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css", "{{ mix('css/app.css') }}"];
};

CKEDITOR.on( 'dialogDefinition', function( ev ) {
    let dialogName = ev.data.name;
    let dialogDefinition = ev.data.definition;

    if ( dialogName === 'table' || dialogName === 'tableProperties' ) {
        let info = dialogDefinition.getContents( 'info' );

        info.get( 'txtWidth' )[ 'default' ] = '100%';
        info.get( 'txtBorder' )[ 'default' ] = '0';
        info.get( 'txtCellPad' )[ 'default' ] = '5';
        info.get( 'txtCellSpace' )[ 'default' ] = '0';
    }
});
