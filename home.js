function goToAddProduct() {
    window.location = "addProduct.php";
}

function signout() {
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == "success") {
                window.location = "home.php";
            }

        }
    };

    r.open("GET", "signout.php", true);
    r.send();

}

function basicSearch(x) {
    var page = x;
    var searchText = document.getElementById("basic_search_text").value;
    var searchSelect = document.getElementById("basic_search_category").value;
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "empty") {
                window.location = "home.php";
            } else {
                document.getElementById("product_view_div").innerHTML = t;
            }
        }
    }

    r.open("GET", "basicSearchProccess.php?t=" + searchText + "&s=" + searchSelect + "&p=" + page, true);
    r.send();
}

function addToWatchList(id) {
    var pid = id;

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;

            if (text == "success") {
                alert("Movie Added to My Wishlist");

            } else {
                alert(text);
            }
        }
    }

    r.open("GET", "addToWatchlistProcess.php?id=" + pid, true);
    r.send();

}

function deleteformwatchlist(id) {
    var wid = id;
    var request = new XMLHttpRequest();
    request.onreadystatechange = function() {
        if (request.readyState == 4) {
            var text = request.responseText;
            if (text == "success") {
                window.location = "watchlist.php";
            }
        }
    }

    request.open("GET", "removeWatchlistItemProccess.php?id=" + wid, true);
    request.send();

}

function gotoCart() {
    window.location = "cart.php";
}

function addToCart(id) {
    var pid = id;

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            alert(t);
        }
    }

    r.open("GET", "addToCartProcess.php?id=" + pid, true);
    r.send();

}


function deleteformcart(id) {

    var cid = id;

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                // window.location = "cart.php";
                window.location.reload();
            }
            alert("Item Removed from the Cart");
        }
    }
    r.open("GET", "deleteFormCartPrcess.php?id=" + cid, true);
    r.send();
}

// detailsmodel

function detailsmodel(id) {
    alert(id);
}

//feedback 

function addFeedback(id) {

    var feedmodel = document.getElementById("feedbackModal" + id);
    k = new bootstrap.Modal(feedmodel);
    k.show();

}

//save feedback

function saveFeedback(id) {
    var pid = id;
    var feedtxt = document.getElementById("feedtxt").value;

    var f = new FormData();
    f.append("i", pid);
    f.append("ft", feedtxt);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "1") {
                alert("Your Feedback has been Successfully Recorded. Thank you!!!");
                k.hide();
            }else{
                alert(t);
            }
        }
    }

    r.open("POST", "savefeedbackProccess.php", true);
    r.send(f);
}

function deletethistory(id){
    var pid = id;
    var f = new FormData;

    f.append("id",pid);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function(){
        if(r.readyState == 4){
            var t = r.responseText;
            alert(t);
            window.location = "purchasehistory.php";
        }
    };
    r.open("POST","deletetransactionhistory.php",true);
    r.send(f);
}


function advancedSearch(x) {
    // alert(x);
    // var x = 1;
    var s = document.getElementById("s1").value;
    var ca = document.getElementById("ca1").value;
    var br = document.getElementById("br1").value;
    var mo = document.getElementById("mo1").value;
    var co = document.getElementById("co1").value;
    var col = document.getElementById("col1").value;
    var prif = document.getElementById("prif1").value;
    var prit = document.getElementById("prit2").value;
    var sort = document.getElementById("sort").value;


    var form = new FormData();
    form.append("page", x);
    form.append("s", s);
    form.append("c", ca);
    form.append("b", br);
    form.append("m", mo);
    form.append("co", co);
    form.append("col", col);
    form.append("prif", prif);
    form.append("prit", prit);
    form.append("sort", sort);


    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            document.getElementById("filter").innerHTML = text;
        }
    };
    r.open("POST", "advancedSearchpro.php", true);
    r.send(form);
}

function reloadCart() {
    window.location = "cart.php";
}

var totalPrice;
var pid;
var inputvalue;

function changeQty(id) {

    inputvalue = document.getElementById("qtytxt" + id).value;
    pid = id;
    totalPrice = document.getElementById("totalPrice");
    // var f = new FormData();
    // f.append("id", id);
    // f.append("txt", inputvalue);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            // totalPrice.innerHTML = "Rs." + t + ".00";
        }
    }

    r.open("GET", "addCartQty.php?id=" + pid + "&qty=" + inputvalue, true);
    r.send();

    // setTimeout(reloadCart, 10000);

}

function cartReload() {
    window.location = "cart.php";
}


function watchlistsearch() {
    
    var searchText = document.getElementById("basic_search_w").value;
    
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "empty") {
                window.location = "watchlist.php";
            } else {
                document.getElementById("product_view_div").innerHTML = t;
            }
        }
    }

    r.open("GET", "basicSearchProccessWatchlist.php?s=" + searchText, true);
    r.send();
}

function filmsearch() {
    var text = document.getElementById("filmsearch").value;
    var table = document.getElementById("films");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "empty") {
                window.location = "Films.php";
            } else {
                table.innerHTML = t;
            }
        }
    }

    r.open("GET", "filmsearch.php?s=" + text, true);
    r.send();
}

function animesearch() {
    var text = document.getElementById("filmsearch").value;
    var table = document.getElementById("films");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "empty") {
                window.location = "Animations.php";
            } else {
                table.innerHTML = t;
            }
        }
    }

    r.open("GET", "animesearch.php?s=" + text, true);
    r.send();
}

function tvsearch() {
    var text = document.getElementById("filmsearch").value;
    var table = document.getElementById("films");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "empty") {
                window.location = "Tv Series.php";
            } else {
                table.innerHTML = t;
            }
        }
    }

    r.open("GET", "tvsearch.php?s=" + text, true);
    r.send();
}

function cartsearch() {
    
    var searchText = document.getElementById("basic_search_w").value;
    
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "empty") {
                window.location = "cart.php";
            } else {
                document.getElementById("product_view_div").innerHTML = t;
            }
        }
    }

    r.open("GET", "cartsearch.php?s=" + searchText, true);
    r.send();
}