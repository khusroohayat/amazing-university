wp.blocks.registerBlockType('brad/border-box', {
    title: 'My Cool Border Box',
    icon: 'smiley',
    category: 'common',
    attributes: {
        content: {type : 'string'},
        color: {type: 'string'}
    },
    edit: function (props) {
        function updateContent(event) {
            props.setAttributes({content: event.target.value})
        }

        function updateColor(value) {
            props.setAttributes({color: value.hex})
        }
        return React.createElement("div", null, /*#__PURE__*/React.createElement("h3", null, "Your cool border box"), /*#__PURE__*/React.createElement("input", {
            type: "text",
            value: props.attributes.content,
            onChange: updateContent
          }), /*#__PURE__*/React.createElement(wp.components.ColorPicker, {
            color: props.attributes.color,
            onChangeComplete: updateColor
          }));
    },
    save: function(props) {
        return wp.element.createElement("h3", {
            style: {
              border: "5px solid ".concat(props.attributes.color)
            }
          }, props.attributes.content);;
    }
})