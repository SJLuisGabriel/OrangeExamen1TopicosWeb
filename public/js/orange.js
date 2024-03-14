// En tu archivo JavaScript

document.addEventListener('DOMContentLoaded', function() {
    fetch('/Post')
        .then(response => response.json())
        .then(data => {
            const postsContainer = document.getElementById('posts-container');
            data.forEach(post => {
                const postHTML = `
                    <div class="col-lg-4 col-md-4">
                        <div class="fh5co-blog animate-box">
                            <a href="#"><img class="img-responsive" src="${post.image}" alt=""></a>
                            <div class="blog-text">
                                <h3><a href="#">${post.title}</a></h3>
                                <span class="posted_on">${post.created_at}</span>
                                <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                                <p>${post.content}</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div> 
                        </div>
                    </div>
                `;
                postsContainer.innerHTML += postHTML;
            });
        })
        .catch(error => console.error('Error fetching posts:', error));
});
