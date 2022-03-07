const update = document.querySelector('.modal-dialog');
let modalBody = document.querySelector(".modal-body");
const addPostBtn = document.querySelector("#add-post");
const update_button_toggle = document.querySelectorAll('.update-button-toggler');

let form = modalBody.querySelector("form");
const title = modalBody.querySelector("input[name='title']");
const description = modalBody.querySelector("input[name='description']");
const picture = modalBody.querySelector("input[name='picture']");
const currentPicture = modalBody.querySelector("input[name='currentPicture']");
const categorie = modalBody.querySelector("select[name='categorie']");

let postId = document.createElement("input");
postId.name = "post_id"
postId.type = "hidden";


addPostBtn.addEventListener("click", () => {
    form.action = "./post/create";
    title.value = "";
    description.value = "";
    categorie.value = "Action";
    postId.value = "";
    currentPicture.value = "";
})
// form.addEventListener("submit", () => {
//     if(form.action = )
// });

update_button_toggle.forEach(button => {
    button.addEventListener('click', () => {
            const data = JSON.parse(button.parentElement.querySelector("script").innerText);
            title.value = data.title;
            description.value = data.description;
            categorie.value = data.categorie;
            postId.value = data.post_id;
            form.append(postId);
            form.action = "./post/update"
        currentPicture.value = data.picture;

        }
    )
});