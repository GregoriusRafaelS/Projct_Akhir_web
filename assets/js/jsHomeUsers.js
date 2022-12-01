//ambil element2 yang dibutuhkan
var price = [];
var quantity = [];
var totalPrice = [];
var idFood = [];

var length = document.getElementById('length');
var lengthfix = length.getAttribute('value');

for(var i=1; i<=lengthfix; i++){
    price.push(document.getElementById('price'+i));
    quantity.push(document.getElementById('quantity'+i));
    totalPrice.push(document.getElementById('total-price'+i));
    idFood.push(document.getElementById('id_food'+i));
}

console.log(quantity[2]);
console.log(lengthfix);

if(quantity[0]){
    quantity[0].addEventListener('change', function(){
        //buat object ajax
        var xhr = new XMLHttpRequest();
        // cek kesiapan ajax
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200 ){
                totalPrice[0].innerHTML = xhr.responseText;
            }
        }
        // eksekusi ajax
            xhr.open('GET', 'assets/ajax/order.php?quantity=' + quantity[0].value + '&&price=' + price[0].value, true);
            xhr.send();

    });
}

if(quantity[1]){
    quantity[1].addEventListener('change', function(){
        //buat object ajax
        var xhr = new XMLHttpRequest();
        // cek kesiapan ajax
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200 ){
                totalPrice[1].innerHTML = xhr.responseText;
            }
        }
        // eksekusi ajax
            xhr.open('GET', 'assets/ajax/order.php?quantity=' + quantity[1].value + '&&price=' + price[1].value, true);
            xhr.send();

    });
}

if(quantity[2]){
    quantity[2].addEventListener('change', function(){
        //buat object ajax
        var xhr = new XMLHttpRequest();
        // cek kesiapan ajax
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200 ){
                totalPrice[2].innerHTML = xhr.responseText;
            }
        }
        // eksekusi ajax
            xhr.open('GET', 'assets/ajax/order.php?quantity=' + quantity[2].value + '&&price=' + price[2].value, true);
            xhr.send();

    });
}

if(quantity[3]){
    quantity[3].addEventListener('change', function(){
        //buat object ajax
        var xhr = new XMLHttpRequest();
        // cek kesiapan ajax
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200 ){
                totalPrice[3].innerHTML = xhr.responseText;
            }
        }
        // eksekusi ajax
            xhr.open('GET', 'assets/ajax/order.php?quantity=' + quantity[3].value + '&&price=' + price[3].value, true);
            xhr.send();

    });
}

if(quantity[4]){
    quantity[4].addEventListener('change', function(){
        //buat object ajax
        var xhr = new XMLHttpRequest();
        // cek kesiapan ajax
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200 ){
                totalPrice[4].innerHTML = xhr.responseText;
            }
        }
        // eksekusi ajax
            xhr.open('GET', 'assets/ajax/order.php?quantity=' + quantity[4].value + '&&price=' + price[4].value, true);
            xhr.send();

    });
}

if(quantity[5]){
    quantity[5].addEventListener('change', function(){
        //buat object ajax
        var xhr = new XMLHttpRequest();
        // cek kesiapan ajax
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200 ){
                totalPrice[5].innerHTML = xhr.responseText;
            }
        }
        // eksekusi ajax
            xhr.open('GET', 'assets/ajax/order.php?quantity=' + quantity[5].value + '&&price=' + price[5].value, true);
            xhr.send();

    });
}

if(quantity[6]){
    quantity[6].addEventListener('change', function(){
        //buat object ajax
        var xhr = new XMLHttpRequest();
        // cek kesiapan ajax
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200 ){
                totalPrice[6].innerHTML = xhr.responseText;
            }
        }
        // eksekusi ajax
            xhr.open('GET', 'assets/ajax/order.php?quantity=' + quantity[6].value + '&&price=' + price[6].value, true);
            xhr.send();

    });
}

if(quantity[7]){
    quantity[7].addEventListener('change', function(){
        //buat object ajax
        var xhr = new XMLHttpRequest();
        // cek kesiapan ajax
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200 ){
                totalPrice[7].innerHTML = xhr.responseText;
            }
        }
        // eksekusi ajax
            xhr.open('GET', 'assets/ajax/order.php?quantity=' + quantity[7].value + '&&price=' + price[7].value, true);
            xhr.send();

    });
}

if(quantity[8]){
    quantity[8].addEventListener('change', function(){
        //buat object ajax
        var xhr = new XMLHttpRequest();
        // cek kesiapan ajax
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200 ){
                totalPrice[8].innerHTML = xhr.responseText;
            }
        }
        // eksekusi ajax
            xhr.open('GET', 'assets/ajax/order.php?quantity=' + quantity[8].value + '&&price=' + price[3].value, true);
            xhr.send();

    });
}

if(quantity[9]){
    quantity[9].addEventListener('change', function(){
        //buat object ajax
        var xhr = new XMLHttpRequest();
        // cek kesiapan ajax
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200 ){
                totalPrice[9].innerHTML = xhr.responseText;
            }
        }
        // eksekusi ajax
            xhr.open('GET', 'assets/ajax/order.php?quantity=' + quantity[9].value + '&&price=' + price[3].value, true);
            xhr.send();

    });
}

if(quantity[10]){
    quantity[10].addEventListener('change', function(){
        //buat object ajax
        var xhr = new XMLHttpRequest();
        // cek kesiapan ajax
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200 ){
                totalPrice[10].innerHTML = xhr.responseText;
            }
        }
        // eksekusi ajax
            xhr.open('GET', 'assets/ajax/order.php?quantity=' + quantity[10].value + '&&price=' + price[3].value, true);
            xhr.send();

    });
}

if(quantity[11]){
    quantity[11].addEventListener('change', function(){
        //buat object ajax
        var xhr = new XMLHttpRequest();
        // cek kesiapan ajax
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200 ){
                totalPrice[11].innerHTML = xhr.responseText;
            }
        }
        // eksekusi ajax
            xhr.open('GET', 'assets/ajax/order.php?quantity=' + quantity[11].value + '&&price=' + price[11].value, true);
            xhr.send();

    });
}

if(quantity[12]){
    quantity[12].addEventListener('change', function(){
        //buat object ajax
        var xhr = new XMLHttpRequest();
        // cek kesiapan ajax
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200 ){
                totalPrice[12].innerHTML = xhr.responseText;
            }
        }
        // eksekusi ajax
            xhr.open('GET', 'assets/ajax/order.php?quantity=' + quantity[12].value + '&&price=' + price[12].value, true);
            xhr.send();

    });
}

if(quantity[13]){
    quantity[13].addEventListener('change', function(){
        //buat object ajax
        var xhr = new XMLHttpRequest();
        // cek kesiapan ajax
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200 ){
                totalPrice[13].innerHTML = xhr.responseText;
            }
        }
        // eksekusi ajax
            xhr.open('GET', 'assets/ajax/order.php?quantity=' + quantity[13].value + '&&price=' + price[3].value, true);
            xhr.send();

    });
}

if(quantity[14]){
    quantity[14].addEventListener('change', function(){
        //buat object ajax
        var xhr = new XMLHttpRequest();
        // cek kesiapan ajax
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200 ){
                totalPrice[14].innerHTML = xhr.responseText;
            }
        }
        // eksekusi ajax
            xhr.open('GET', 'assets/ajax/order.php?quantity=' + quantity[14].value + '&&price=' + price[3].value, true);
            xhr.send();

    });
}

if(quantity[15]){
    quantity[15].addEventListener('change', function(){
        //buat object ajax
        var xhr = new XMLHttpRequest();
        // cek kesiapan ajax
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200 ){
                totalPrice[15].innerHTML = xhr.responseText;
            }
        }
        // eksekusi ajax
            xhr.open('GET', 'assets/ajax/order.php?quantity=' + quantity[15].value + '&&price=' + price[3].value, true);
            xhr.send();

    });
}

if(quantity[16]){
    quantity[16].addEventListener('change', function(){
        //buat object ajax
        var xhr = new XMLHttpRequest();
        // cek kesiapan ajax
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200 ){
                totalPrice[16].innerHTML = xhr.responseText;
            }
        }
        // eksekusi ajax
            xhr.open('GET', 'assets/ajax/order.php?quantity=' + quantity[16].value + '&&price=' + price[16].value, true);
            xhr.send();

    });
}

if(quantity[17]){
    quantity[17].addEventListener('change', function(){
        //buat object ajax
        var xhr = new XMLHttpRequest();
        // cek kesiapan ajax
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200 ){
                totalPrice[17].innerHTML = xhr.responseText;
            }
        }
        // eksekusi ajax
            xhr.open('GET', 'assets/ajax/order.php?quantity=' + quantity[17].value + '&&price=' + price[17].value, true);
            xhr.send();

    });
}

if(quantity[18]){
    quantity[18].addEventListener('change', function(){
        //buat object ajax
        var xhr = new XMLHttpRequest();
        // cek kesiapan ajax
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200 ){
                totalPrice[18].innerHTML = xhr.responseText;
            }
        }
        // eksekusi ajax
            xhr.open('GET', 'assets/ajax/order.php?quantity=' + quantity[18].value + '&&price=' + price[18].value, true);
            xhr.send();

    });
}

if(quantity[19]){
    quantity[19].addEventListener('change', function(){
        //buat object ajax
        var xhr = new XMLHttpRequest();
        // cek kesiapan ajax
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200 ){
                totalPrice[19].innerHTML = xhr.responseText;
            }
        }
        // eksekusi ajax
            xhr.open('GET', 'assets/ajax/order.php?quantity=' + quantity[19].value + '&&price=' + price[19].value, true);
            xhr.send();

    });
}

if(quantity[20]){
    quantity[20].addEventListener('change', function(){
        //buat object ajax
        var xhr = new XMLHttpRequest();
        // cek kesiapan ajax
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200 ){
                totalPrice[20].innerHTML = xhr.responseText;
            }
        }
        // eksekusi ajax
            xhr.open('GET', 'assets/ajax/order.php?quantity=' + quantity[20].value + '&&price=' + price[20].value, true);
            xhr.send();

    });
}

if(quantity[21]){
    quantity[21].addEventListener('change', function(){
        //buat object ajax
        var xhr = new XMLHttpRequest();
        // cek kesiapan ajax
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200 ){
                totalPrice[21].innerHTML = xhr.responseText;
            }
        }
        // eksekusi ajax
            xhr.open('GET', 'assets/ajax/order.php?quantity=' + quantity[21].value + '&&price=' + price[21].value, true);
            xhr.send();

    });
}

if(quantity[22]){
    quantity[22].addEventListener('change', function(){
        //buat object ajax
        var xhr = new XMLHttpRequest();
        // cek kesiapan ajax
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200 ){
                totalPrice[22].innerHTML = xhr.responseText;
            }
        }
        // eksekusi ajax
            xhr.open('GET', 'assets/ajax/order.php?quantity=' + quantity[22].value + '&&price=' + price[22].value, true);
            xhr.send();

    });
}

if(quantity[23]){
    quantity[23].addEventListener('change', function(){
        //buat object ajax
        var xhr = new XMLHttpRequest();
        // cek kesiapan ajax
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200 ){
                totalPrice[23].innerHTML = xhr.responseText;
            }
        }
        // eksekusi ajax
            xhr.open('GET', 'assets/ajax/order.php?quantity=' + quantity[23].value + '&&price=' + price[23].value, true);
            xhr.send();

    });
}

// for(var i=0;i<5; i++){
//     if(typeof quantity[i] !== 'undefined'){

//     quantity[i].addEventListener('change', function(){
//         //buat object ajax
//         var xhr = new XMLHttpRequest();
//         // cek kesiapan ajax
//         xhr.onreadystatechange = function(){
//             if( xhr.readyState == 4 && xhr.status == 200 ){
//                 totalPrice[i].innerHTML = xhr.responseText;
//             }
//         }
//         // eksekusi ajax
//             xhr.open('GET', 'assets/ajax/order.php?quantity=' + quantity[i].value + '&&price=' + price[i].value, true);
//             xhr.send();

//     });
// }
// }