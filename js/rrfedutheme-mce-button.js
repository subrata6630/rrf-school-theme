(function() {
	tinymce.PluginManager.add('rrfedutheme_mce_button', function( editor, url ) {
		editor.addButton( 'rrfedutheme_mce_button', {
			text: 'শর্টকোড',
			icon: false,
			type: 'menubutton',
			menu: [
				{
					text: 'স্পেশাল কনটেন্ট',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'স্পেশাল কনটেন্ট যুক্ত করুন',
                            body: [
                                {
                                    type: 'textbox',
                                    name: 'specialContentId',
                                    label: 'স্পেশাল কনটেন্টের আইডি (ইংরেজিতে)',
                                }
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( '[special_content id="' + e.data.specialContentId + '"]');
                            }
                        });
                    }
				},
				{
					text: 'শিক্ষক তালিকা',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'শিক্ষক তালিকা যুক্ত করুন',
                            body: [
                                {
                                    type: 'listbox',
                                    name: 'teachersType',
                                    label: 'ধরন',
                                    'values': [
                                        {text: 'বর্তমান শিক্ষকদের তালিকা', value: 'current'},
                                        {text: 'প্রাক্তণ শিক্ষকদের তালিকা', value: 'archive'}
                                    ]
                                }                                
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( '[teachers type="' + e.data.teachersType + '"]');
                            }
                        });
                    }
				},
				{
					text: 'শুন‍্যপদের তালিকা',
                    onclick: function() {
                        editor.insertContent( '[vacencies]');
                    }
				},
				{
					text: '৩য় ও ৪র্থশ্রেণীর কর্মচারীদের তালিকা',
                    onclick: function() {
                        editor.insertContent( '[employee]');
                    }
				},
				{
					text: 'নোটিশবোর্ড',
                    onclick: function() {
                        editor.insertContent( '[notices]');
                    }
				},
				{
					text: 'একাডেমিক ক‍্যালেন্ডার',
                    onclick: function() {
                        editor.insertContent( '[calendar]');
                    }
				},
				{
					text: 'রুটিন',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'রুটিন যুক্ত করুন',
                            body: [
                                {
                                    type: 'listbox',
                                    name: 'routineType',
                                    label: 'ধরন',
                                    'values': [
                                        {text: 'ক্লাশ রুটিন', value: 'class'},
                                        {text: 'পরীক্ষার রুটিন', value: 'exam'}
                                    ]
                                }                                
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( '[routines type="' + e.data.routineType + '"]');
                            }
                        });
                    }
				},
				{
					text: 'অভিভাবক কমিটির তালিকা',
                    onclick: function() {
                        editor.insertContent( '[committee]');
                    }
				}, 
				{
					text: 'ফটোগ‍্যালারি',
                    onclick: function() {
                        editor.insertContent( '[photogallery]');
                    }
				}, 
				{
					text: 'শিক্ষার্থীদের তালিকা',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'শিক্ষার্থীদের তালিকা যুক্ত করুন',
                            body: [
                                {
                                    type: 'listbox',
                                    name: 'studentColumn',
                                    label: 'কয় কলামে দেখাবে?',
                                    'values': [
                                        {text: '৪ কলাম', value: '4'},
                                        {text: '৩ কলাম', value: '3'},
                                        {text: '২ কলাম', value: '2'},
                                        {text: '১ কলাম', value: '1'},
                                    ]
                                }                                
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( '[students student_list_column="' + e.data.studentColumn + '"]');
                            }
                        });
                    }
				},
				{
					text: 'কৃতি শিক্ষার্থীদের তালিকা',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'কৃতি শিক্ষার্থীদের তালিকা যুক্ত করুন',
                            body: [
                                {
                                    type: 'listbox',
                                    name: 'prostudentColumn',
                                    label: 'কয় কলামে দেখাবে?',
                                    'values': [
                                        {text: '৪ কলাম', value: '4'},
                                        {text: '৩ কলাম', value: '3'},
                                        {text: '২ কলাম', value: '2'},
                                        {text: '১ কলাম', value: '1'},
                                    ]
                                }                                
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( '[prostudents student_list_column="' + e.data.prostudentColumn + '"]');
                            }
                        });
                    }
				},                
				{
					text: 'পরীক্ষার ফলাফল',
                    onclick: function() {
                        editor.insertContent( '[results]');
                    }
				},                
			]
		});
	});
})();