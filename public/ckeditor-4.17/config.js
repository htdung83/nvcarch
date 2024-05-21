if (jQuery) {
    if ($("link#ckEditorContentCss").length > 0) ckEditorContentCss = $("link#ckEditorContentCss").attr("href");else console.log("CKEditor config: No meta tag for CKEditor content!");
} else {
    console.log("CKEditor config: No jQuery loaded!");
}

CKEDITOR.editorConfig = function (config) {
    config.toolbarGroups = [{
        name: 'document',
        groups: ['mode', 'document', 'doctools']
    }, {
        name: 'clipboard',
        groups: ['clipboard', 'undo']
    }, {
        name: 'forms',
        groups: ['forms']
    }, '/', {
        name: 'basicstyles',
        groups: ['basicstyles', 'cleanup']
    }, {
        name: 'paragraph',
        groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph']
    }, {
        name: 'links',
        groups: ['links']
    }, {
        name: 'insert',
        groups: ['insert']
    }, {
        name: 'styles',
        groups: ['styles']
    }, {
        name: 'colors',
        groups: ['colors']
    }, {
        name: 'tools',
        groups: ['tools']
    }, {
        name: 'others',
        groups: ['others']
    }, {
        name: 'about',
        groups: ['about']
    }];
    config.removeButtons = 'Form,Radio,TextField,Checkbox,Textarea,Select,Button,ImageButton,HiddenField,About,Maximize,ShowBlocks,Language';
    config.removePlugins = 'easyimage, cloudservices, exportpdf';
    config.height = '450px';
    config.extraPlugins = 'youtube';
    config.youtube_responsive = true;
    config.allowedContent = true;
    config.contentsCss = ckEditorContentCss;
};

CKEDITOR.on('dialogDefinition', function (ev) {
    var dialogName = ev.data.name;
    var dialogDefinition = ev.data.definition;

    if (dialogName === 'table' || dialogName === 'tableProperties') {
        var info = dialogDefinition.getContents('info');

        info.get('txtWidth')['default'] = '100%';
        info.get('txtBorder')['default'] = '0';
        info.get('txtCellPad')['default'] = '5';
        info.get('txtCellSpace')['default'] = '0';
    }
});
