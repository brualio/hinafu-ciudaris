
document.addEventListener("DOMContentLoaded", () => {
    const shareSocial = (t, type, url) => {
        let w = 600,h = 450, pos_x, pos_y
        pos_x=(screen.width/2)-(w/2)
        pos_y=(screen.height/2)-(h/2)
        switch(type) {
        case 'facebook':
        window.open('http://www.facebook.com/sharer.php?u='+url+'','mywindow', 'toolbar=0, status=0, left='+pos_x+', top='+pos_y+', width='+w+', height='+h);
        break;
        case 'twitter':
        window.open('https://twitter.com/intent/tweet?text=&url='+url+'&via=PosD','mywindow', 'toolbar=0, status=0, left='+pos_x+', top='+pos_y+', width='+w+', height='+h);
        break;
        case 'pinterest':
        window.open('https://pinterest.com/pin/create/button/?media='+url+'','mywindow', 'toolbar=0, status=0, left='+pos_x+', top='+pos_y+', width='+w+', height='+h);
        break;
        case 'googlemaps':
        window.open('https://plus.google.com/share?url='+url+'','mywindow', 'toolbar=0, status=0, left='+pos_x+', top='+pos_y+', width='+w+', height='+h);
        break;
        case 'linkedin':
        window.open('http://www.linkedin.com/shareArticle?url='+url+'','mywindow', 'toolbar=0, status=0, left='+pos_x+', top='+pos_y+', width='+w+', height='+h);
        break;
        }
    }
});