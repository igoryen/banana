window.onload = function() {
            // $("#aaa").text("Hi");
            $("#text").focus();
            // var $bbb = $("#bbb");

            $("#doit").click( function() {
                var text = $("#text").val();
                // console.log(text);
                
                var fixed = escapeRegExp(text);
                $("#pickmeup").text(fixed);

                var names2 = names(fixed);
                $("#names3").val(names2);

            });

            function escapeRegExp(string) {
                var en = /\[[\da-zA-Z0-9\u0400-\u04FF\s\t\|\.\?\-\|\*]+\]/g;
                // var r = /\[[.]+\]/g;

                var cleaned = string.replace(en, ''); 


                // var ru = /\[[\u0400-\u04FF]\]/gi;
                // cleaned = string.replace(ru, '');
                //console.log("cleaned: " + cleaned);


                cleaned = cleaned.replace('St. Petersburg', 'Saint Petersburg');
                cleaned = cleaned.replace('St.Petersburg', 'Saint Petersburg');
                cleaned = cleaned.replace('From Wikipedia, the free encyclopedia', '');
                var wikimsg = "This section does not cite any sources. Please help improve this section by adding citations to reliable sources. Unsourced material may be challenged and removed. (October 2013) (Learn how and when to remove this template message)";
                cleaned = cleaned.replace("U.S.", "U S");

                cleaned = cleaned.replace(wikimsg, '');


                
                return cleaned;
            }

            function startsWithALetter(string) {
                return /[a-zA-Z\u0400-\u04FF]$/.test(string.charAt(0));
            }

            function names(string) {
                var balabolke = [];
                var splitstring = string.split(/[\s\,\.\)\"\:\;\!\?\£\—\$]+/);
                //console.log(splitstring);
                for (var i = 0; i < splitstring.length; i++) {
                    
                    
                    if(startsWithALetter(splitstring[i]) && splitstring[i].length > 1) {
                        console.log("first is leter");
                        if (splitstring[i].substr(0,1) == splitstring[i].substr(0,1).toUpperCase()){
                            balabolke.push(splitstring[i]);
                        }
                    }
                    

                }
                // console.log("balabolke: " + balabolke);
                // return balabolke;
                var uniqueNames = [];
                $.each(balabolke, function(i, el){
                    if($.inArray(el, uniqueNames) === -1) uniqueNames.push(el);
                });

                uniqueNames.sort();
                console.log("before join: " + uniqueNames);

                //======================================
                // var ary = [];
                // for (var i = 0; i < uniqueNames.length; i++) {
                //     ary.push($("<div/>").text(uniqueNames[i]));
                // };

                // return ary;
                //======================================
                var last = uniqueNames.join(" ");
                // console.log("after join: " + uniqueNames);
                
                return last; // 4

            }
        }