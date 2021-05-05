const setBanner= (img, place) => {
    $(place).css("background-image", img);//Updates the css adding the background image from the database
};

const getBanner= (banners) => { 
            $.post("FindBanner.php", {banners:banners},//run file get FindBanner.php
                     function (data) {  //The data echo response from the php file
                        if (data.includes('success')) {//If php echo response includes success
                           var file = data.split('~');//Divids the response '~'
                           for(let i = 1;i<=banners; i++){
                               sumbit= file[i].split('`');//Divids the response'`'
                               setBanner(sumbit[0], sumbit[1]);
                           }
                                   
                        } else {
                            alert('Check with system admin, report this message'+ data);//Alerts send and deals with an error from the php file 
                        }
                    });
                    
};
getBanner(4);//Calls for 4 banners
   