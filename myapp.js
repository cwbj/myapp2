
let rname = $post['rname'];
let rnum = $post['rnum'];


function add() {
    var table = document.getElementById('myappreg_tr');  //表のオブジェクトを取得
 
    var row = table.insertRow(-1);  //行末に行(tr要素)を追加
 
    var cell1 = row.insertCell(0);  //セル(td要素)の追加
    var cell2 = row.insertCell(1); 
 
    cell1.innerHTML = 'rname';   //セルにデータを挿入する
    cell2.innerHTML = 'rnum';

}


