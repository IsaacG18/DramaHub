const setBanner= (img, place) => {
    $(place).css("background-image", img);
    console.log(img + place);
}

const getBanner= (banners) => { 
            $.post("FindBanner.php", {banners:banners},
                     function (data) {  
                        if (data.includes('success')) {
                                
                           var file = data.split('~');
                           for(let i = 1;i<=banners; i++){
                               sumbit= file[i].split('`');
                               setBanner(sumbit[0], sumbit[1]);
                           }
                                   
                        } else {
                            alert(data);
                        }
                    });
                    
};
getBanner(4);
   