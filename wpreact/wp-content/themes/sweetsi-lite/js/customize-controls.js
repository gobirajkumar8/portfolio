( function( api ) {

	// Extends our custom "sweetsi-lite" section.
	api.sectionConstructor['sweetsi-lite'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );