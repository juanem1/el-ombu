var toolbar = [
    {
        name: "bold",
        action: toggleBold,
        className: "fa fa-bold",
        title: "Negrita (Ctrl+B)"
    },
    {
        name: "italic",
        action: toggleItalic,
        className: "fa fa-italic",
        title: "Italica (Ctrl+I)"
    },
    '|',
    {
        name: "quote",
        action: toggleBlockquote,
        className: "fa fa-quote-left",
        title: "Quota (Ctrl+')"
    },
    {
        name: "unordered-list",
        action: toggleUnorderedList,
        className: "fa fa-list-ul",
        title: "List Generica (Ctrl+L)"
    },
    {
        name: "numbered-list",
        action: toggleOrderedList,
        className: "fa fa-list-ol",
        title: "List Numerada (Ctrl+Alt+L)"
    },
    '|',
    {
        name: "link",
        action: drawLink,
        className: "fa fa-link",
        title: "Link (Ctrl+K)"
    },
    {
        name: "horizontal-rule",
        action: drawHorizontalRule,
        className: "fa fa-minus",
        title: "Linea Horizontal"
    },
    '|',
    {
        name: "preview",
        action: togglePreview,
        className: "fa fa-eye",
        title: "Vista Previa (Ctrl+P)"
    },
    {
        name: "fullscreen",
        action: toggleFullScreen,
        className: "fa fa-arrows-alt",
        title: "Pantalla Completa (F11)"
    },
    {
        name: "guide",
        action: 'http://nextstepwebs.github.io/simplemde-markdown-editor/markdown-guide',
        className: "fa fa-question-circle",
        title: "Ayuda"
    }
];