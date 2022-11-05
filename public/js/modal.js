$(function(){
    $(".modal-btn").on("click", function(){
        let dialog = openModal($(this).val());
        
        
        //非同期処理
        $.ajax({
            type: "get",
            url: "details/" + $(this).next().val()
        }).done(function(response){

            console.log(response);
            //表示したい商品名
            $(dialog).find("h5").text(response.name);
            //表示したい単価
            $(dialog).find(".p-price").text("¥" + response.price);
            //表示したい概要
            $(dialog).find(".description").text(response.description);
        
            $(dialog).find("#itemId").val(response.id);
        }).fail(function(response){
            console.log("接続失敗");
        });

    });

    $(".modal-close").on("click", function(){
        closeModal($(this).val());
    });
});


function openModal(btn){
    //1.btnTypeを利用して取得したいid名を生成しモーダルのdialog要素を取得
    let dialog = document.getElementById(btn + "Modal");
    // 2.取得した要素を利用してモーダル表示を行う
    dialog.showModal();
    // 3.取得した要素は返り値として呼び出し元へ返す
    return dialog;
}

function closeModal(btn){
    let dialog = document.getElementById(btn + "Modal");
    dialog.close();
}