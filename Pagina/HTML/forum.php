<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foro Comunitario</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    #container {
      max-width: 800px;
      margin: 20px auto;
      padding: 0 20px;
    }

    #posts {
      margin-bottom: 20px;
    }

    .post {
      border: 1px solid #ccc;
      padding: 10px;
      margin-bottom: 10px;
    }

    #post-content {
      width: 100%;
      height: 100px;
      margin-bottom: 10px;
    }

    button {
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      border: none;
      cursor: pointer;
    }

    button:hover {
      background-color: #555;
    }
  </style>
</head>
<body>
  <header>
    <h1>Foro Comunitario</h1>
  </header>
  <div id="container">
    <div id="posts">
      <!-- Aquí se cargarán los mensajes del foro -->
    </div>
    <form id="post-form">
      <textarea id="post-content" placeholder="Escribe tu mensaje aquí..."></textarea>
      <button type="submit">Publicar</button>
    </form>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const postForm = document.getElementById('post-form');
      const postContent = document.getElementById('post-content');
      const postsContainer = document.getElementById('posts');

      postForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const content = postContent.value;
        if (content.trim() !== '') {
          createPost(content);
          postContent.value = '';
        }
      });

      function createPost(content) {
        const post = document.createElement('div');
        post.className = 'post';
        post.innerHTML = `<p>${content}</p>`;
        postsContainer.prepend(post);
      }
    });
  </script>
</body>
</html>