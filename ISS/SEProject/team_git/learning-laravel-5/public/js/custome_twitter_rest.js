/**
 * Created by jixiang on 9/12/15.
 */

var json_data = Object();
$("#protoType_btn").click(function(){

    var hash_text =  $("#hash_text").val();
    $.get(
        "/twitterRESTApi",
        { hash_text: hash_text },
        function(data) {
            alert(data);
            $('#stage').html(data);
            json_data = JSON.parse(data);
            //alert(data);
            fill_table(json_data);
        }
    );

});

//console.log(json_data);
//alert(json_data);


function remove_all_table(){

    $('#table').bootstrapTable('removeAll');
}


function fill_table(json_data){

    if (json_data.length !== 0){


        console.log(json_data['display']);
        $('#table').bootstrapTable('load',build_data(json_data));
//        $('#table').bootstrapTable({
//            columns: [{
//                field: 'user_img',
//                title: 'user_img'
//            }, {
//                field: 'username',
//                title: 'username'
//            }, {
//                field: 'text',
//                title: 'text'
//            }],
//            data: json_data['display']
//        });
    }
}

function build_data(json_data){
    data = json_data["display"];
    //alert(data.length);
    rows = [];
    for (var i = 0; i < data.length; i++) {
        rows.push({
            user_img: data[i]["user_img"],
            username:  data[i]["username"],
            text:  data[i]["text"]
        });
    }
    return rows;
}