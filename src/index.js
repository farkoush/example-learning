// import { registerBlockType } from '@wordpress/blocks';

// import './style.scss';

// /**
//  * Internal dependencies
//  */
// import Edit from './edit';
// import save from './save';
import metadata from './block.json';

// registerBlockType( metadata.name, {
// 	/**
// 	 * @see ./edit.js
// 	 */
// 	edit: Edit,
// 	/**
// 	 * @see ./save.js
// 	 */
// 	save,
// } );


wp.blocks.registerBlockType("ourplugin/are-you",{
    title: "Are you",
    icon: "smilely",
    category: "common",
	attributes: {
		skyColor : {type: "string"},
		grassColor: {type:"string"}
	},
    edit: function(props){
		console.log('props');

		console.log(props);

		function skyColorChange (event){
			props.setAttributes({skyColor: event.target.value })
		}
		function grassColorChange (event){
			props.setAttributes({grassColor: event.target.value })
		}
        return (
			<>
				<input type="text" placeholder="sky color" value={props.attributes.skyColor} onChange={skyColorChange}/>
				<input type="text" placeholder="grass color" value={props.attributes.grassColor} onChange={grassColorChange}/>
			</>
		)
    },
    save: function(props) {
		return null
        // return <p>todaye sky is <span className="skyColor">{props.attributes.skyColor}</span> and <span className="grassColor">{props.attributes.grassColor}</span> color is y</p>
    },
})