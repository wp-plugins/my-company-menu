(function(){

    tinymce.PluginManager.requireLangPack('mycompset');
    
    tinymce.create('tinymce.plugins.mycompset', {
    
        init : function(ed, url){
            ed.addCommand('mcemcsPHONE', function(){
                tinyMCE.activeEditor.selection.setContent('[company_phone]');
            });
            ed.addButton('mcsPHONE', {
                title: 'Add phone number shortcode',
                image: url + '/images/mycomp_phone.png',
                cmd: 'mcemcsPHONE'
            });

            ed.addCommand('mcemcsFAX', function(){
			    tinyMCE.activeEditor.selection.setContent('[company_fax]');
			});
			ed.addButton('mcsFAX', {
			    title: 'Add fax number shortcode',
			    image: url + '/images/mycomp_fax.png',
			    cmd: 'mcemcsFAX'
			});

            ed.addCommand('mcemcsEMAIL', function(){
                tinyMCE.activeEditor.selection.setContent('[company_email]');
            });
            ed.addButton('mcsEMAIL', {
                title: 'Add email address shortcode',
                image: url + '/images/mycomp_email.png',
                cmd: 'mcemcsEMAIL'
            });

            ed.addCommand('mcemcsADDRESS', function(){
                tinyMCE.activeEditor.selection.setContent('[company_address]');
            });
            ed.addButton('mcsADDRESS', {
                title: 'Add address shortcode',
                image: url + '/images/mycomp_address.png',
                cmd: 'mcemcsADDRESS'
            });
						
        },
        createControl : function(n, cm){
            return null;
        },
        getInfo : function(){
            return {
                longname: 'Jason Michael Cross',
                author: 'Jason Michael Cross',
                authorurl: 'http://www.jasonmichaelcross.com/',
                infourl: 'http://jasonmichaelcross.com/',
                version: "1.0"
            };
        }
    });
    tinymce.PluginManager.add('mycompset', tinymce.plugins.mycompset);
})();



