function changeCarInformation(type){
    if(type == 'soft_top_full_body_loader'){
        $('.soft_top_full_body_loader').show();
        $('.open_top_loader').hide();
        $('.rhino_oc_open_type_cargo').hide();
    }else if(type == 'open_top_loader'){
        $('.soft_top_full_body_loader').hide();
        $('.open_top_loader').show();
        $('.rhino_oc_open_type_cargo').hide();
    }else{
        $('.soft_top_full_body_loader').hide();
        $('.open_top_loader').hide();
        $('.rhino_oc_open_type_cargo').show();
    }
}

function changeTrollyInformation(type){
    if(type == 'trolley_tr_1'){
        $('.trolley_tr_1').show();
        $('.trolley_tr_2').hide();
        $('.trolley_lift_attachment').hide();
        $('.tipper').hide();
        $('.custom').hide();
    }else if(type == 'trolley_tr_2'){
        $('.trolley_tr_1').hide();
        $('.trolley_tr_2').show();
        $('.trolley_lift_attachment').hide();
        $('.tipper').hide();
        $('.custom').hide();
    }else if(type == 'trolley_lift_attachment'){
        $('.trolley_tr_1').hide();
        $('.trolley_tr_2').hide();
        $('.trolley_lift_attachment').show();
        $('.tipper').hide();
        $('.custom').hide();
    }else if(type == 'tipper'){
        $('.trolley_tr_1').hide();
        $('.trolley_tr_2').hide();
        $('.trolley_lift_attachment').hide();
        $('.tipper').show();
        $('.custom').hide();
    }else if(type == 'custom'){
        $('.trolley_tr_1').hide();
        $('.trolley_tr_2').hide();
        $('.trolley_lift_attachment').hide();
        $('.tipper').hide();
        $('.custom').show();
    }
}