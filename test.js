wp.blocks.registerBlockType("ourplugin/are-you",{
    title: "Are you",
    icon: "smilely",
    category: "common",
    edit: function(){
        return wp.element.createElement("h3",null,"hello edit");

    },
    save: function() {
        return wp.element.createElement("h1", null, "hello save");
    }
})