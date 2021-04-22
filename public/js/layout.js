
function changeLanguage() {
    let languageSelect = document.getElementById('lang_select');

    if(languageSelect.value === "en") {
        window.location.assign("\\en");
    } else if(languageSelect.value === "ru") {
        window.location.assign("\\ru");
    }
}

function shopNow() {
    window.location.assign("/categories/kitchen_dining")
}

function orderBag() {
    window.location.assign("/products/1")
}