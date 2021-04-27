let url = "http://localhost/practice/retrieve_data.php"

// fetch(url, {
//     method : "POST",
//     body : new FormData(document.querySelector());
// })

async function getPostedData(){
    try {
        let entries = new FormData(document.querySelector('#inputform'));
        return await fetch(url, {
            method: "POST",
            body: entries,
            // mode: 'no-cors'
        }).then(
            response => response.json()
        )
    }
    catch (error) {
        console.log(error);
    }
}


async function getter() {
    let varr = await getPostedData();
    console.log(varr);
    for (let obj of varr)
        console.log(obj);
    // console.log(typeof(varr));
}
let btn = document.querySelector('#clicker');
btn.addEventListener('click',getter);