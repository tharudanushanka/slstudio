function changeImage() {
    var image = document.getElementById("imguploader"); //file chooser
    var view = document.getElementById("prev"); //image tag

    image.onchange = function() {
        var file = this.files[0]; //image eka thiyana file path eka
        var url = window.URL.createObjectURL(file); //file location eka tempary url ekak lesa sakasima

        view.src = url; //img tag eke src ekata url eka laba dima
    }
}

function addProduct() {
    var category = document.getElementById("ca");
    var brand = document.getElementById("br");
    var model = document.getElementById("mo");
    var title = document.getElementById("ti");
    var condition;

    if (document.getElementById("bn").checked) {
        condition = "1";
    } else if (document.getElementById("us").checked) {
        condition = "2";
    }

    var colour;

    if (document.getElementById("clr1").checked) {
        colour = "1";
    } else if (document.getElementById("clr2").checked) {
        colour = "2";
    } else if (document.getElementById("clr3").checked) {
        colour = "3";
    } else if (document.getElementById("clr4").checked) {
        colour = "4";
    } else if (document.getElementById("clr5").checked) {
        colour = "5";
    } else if (document.getElementById("clr6").checked) {
        colour = "6";
    } else if (document.getElementById("clr7").checked) {
        colour = "7";
    } else if (document.getElementById("clr8").checked) {
        colour = "8";
    } else if (document.getElementById("clr9").checked) {
        colour = "9";
    }

    var qty = document.getElementById("qty");
    var price = document.getElementById("cost");
    var description = document.getElementById("desc");
    var image = document.getElementById("imguploader");

    var form = new FormData();
    form.append("c", category.value);
    form.append("b", brand.value);
    form.append("m", model.value);
    form.append("t", title.value);
    form.append("co", condition);
    form.append("col", colour);
    form.append("qty", qty.value);
    form.append("p", price.value);
    form.append("desc", description.value);
    form.append("img", image.files[0]);


    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text);
            window.location="addProduct.php";
        }
    }

    r.open("POST", "addProductProces.php", true);
    r.send(form);

}

function changeproductview() {

    var add = document.getElementById("addproductbox");
    var update = document.getElementById("updateproductbox");

    add.classList.toggle("d-none");
    update.classList.toggle("d-none");

}

function searchtoupdate() {
    var id = document.getElementById("searchToUpdate").value;
    var title = document.getElementById("ti");
    var cat = document.getElementById("ca");

    var request = new XMLHttpRequest();
    request.onreadystatechange = function() {
        if (request.readyState == 4) {
            var text = request.responseText;
            var object = JSON.parse(text);

            cat.value = object["category"];
            title.value = object["title"];
        }
    }

    request.open("GET", "searchToUpdateProccess.php?id=" + id, true);
    request.send();
}