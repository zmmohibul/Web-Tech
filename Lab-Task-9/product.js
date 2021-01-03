console.log("Hello")

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myArr = JSON.parse(this.responseText);
        console.log(myArr.data.length);
        makeProducts(myArr.data);
        // myFunction(myArr);
    }
};
xmlhttp.open("GET", "http://localhost/Lab-Task-9/read.php", true);
xmlhttp.send();

function makeProducts(arr) {
    console.log(arr);
    // console.log(arr.length);
    for (item of arr) {
        makeProductElements(item);
    }
}

let sortby = document.querySelector('#sortby');
sortby.addEventListener('input', function() {
    let container = document.querySelector('#container');
    let row = document.querySelector('#product-row')
    container.removeChild(row);
    console.log(sortby.value);
    let newRow = document.createElement('div')
    newRow.classList.add('row')
    newRow.setAttribute("id", "product-row")
    container.appendChild(newRow)

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var myArr = JSON.parse(this.responseText);
            console.log(myArr.data.length);
            makeProducts(myArr.data);
        }
    };
    xmlhttp.open("GET", "http://localhost/Lab-Task-9/read.php?sort=" + sortby.value, true);
    xmlhttp.send();

})

let category = document.querySelector("#category");
category.addEventListener('input', function() {
    let container = document.querySelector('#container');
    let row = document.querySelector('#product-row')
    container.removeChild(row);
    console.log(sortby.value);
    let newRow = document.createElement('div')
    newRow.classList.add('row')
    newRow.setAttribute("id", "product-row")
    container.appendChild(newRow)

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var myArr = JSON.parse(this.responseText);
            console.log(myArr.data.length);
            makeProducts(myArr.data);
        }
    };
    xmlhttp.open("GET", "http://localhost/Lab-Task-9/read.php?category=" + category.value, true);
    xmlhttp.send();
})


let search = document.querySelector("#search");
search.addEventListener('input', function() {
    let container = document.querySelector('#container');
    let row = document.querySelector('#product-row')
    container.removeChild(row);
    console.log(sortby.value);
    let newRow = document.createElement('div')
    newRow.classList.add('row')
    newRow.setAttribute("id", "product-row")
    container.appendChild(newRow)

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var myArr = JSON.parse(this.responseText);
            console.log(myArr.data.length);
            makeProducts(myArr.data);
        }
    };
    xmlhttp.open("GET", "http://localhost/Lab-Task-9/read.php?search=" + search.value, true);
    xmlhttp.send();
})



function makeProductElements(item) {
    // console.log(item;
    let productRow = document.querySelector("#product-row");

    let imgURL = "https://images.unsplash.com/photo-1515007917921-cad9bf0e2e87?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTV8fGNhbmR5fGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60";

    let product = document.createElement('div');
    product.classList.add("col-4", "text-center", 'mb-5');

    let prdImg = document.createElement('img');
    prdImg.classList.add("img-fluid")
    prdImg.src = imgURL;
    product.appendChild(prdImg);

    let h5 = document.createElement('h5');
    h5.classList.add('h4');
    h5.innerText = item.productName;
    product.appendChild(h5);


    let p = document.createElement('p');
    p.classList.add('lead', 'mb-1');
    str1 = "Price: Tk ";
    str2 = item.price;
    p.innerText = str1.concat(str2);
    product.appendChild(p);

    let vwBtn = document.createElement('button');
    vwBtn.classList.add('btn', 'btn-primary', 'mr-1');
    vwBtn.innerText = "View Product";
    product.appendChild(vwBtn);

    productRow.appendChild(product);
}
