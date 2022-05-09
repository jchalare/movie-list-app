function movieList() {
  let title = document.getElementById("title").value;
  let date_begin = document.getElementById("date_begin").value;
  let date_end = document.getElementById("date_end").value;
  let sort = document.getElementById("sort").value;

  const tbody = document.querySelector("#movie_list");

  let movieData = {
    title,
    date_begin,
    date_end,
    sort,
  };

  $.post(
    "../controllers/MovieListViewController.php",
    { movieData },
    function (response) {
      response = JSON.parse(response);
      if (response.Search) {
        for (let item of response.Search) {
          const tr = document.createElement("tr");
          let movieTitle = document.createElement("td");
          movieTitle.textContent = item.Title;
          tr.appendChild(movieTitle);

          let movieYear = document.createElement("td");
          movieYear.textContent = item.Year;
          tr.appendChild(movieYear);

          let movieType = document.createElement("td");
          movieType.textContent = item.Type;
          tr.appendChild(movieType);

          let moviePoster = document.createElement("td");
          let movieImg = document.createElement("img");
          movieImg.src = item.Poster;
          movieImg.height = 100;
          movieImg.width = 100;
          moviePoster.appendChild(movieImg);
          tr.appendChild(moviePoster);

          tbody.appendChild(tr);
        }
      }else{
          alert(response.Error);
      }
    }
  );
}
