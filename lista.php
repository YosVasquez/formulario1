<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="manifest" href="site.webmanifest" />
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#2d89ef" />
    <meta name="theme-color" content="#ffffff" />
    <link rel="stylesheet" href="lista.css" />
    <title>BOSCOLISTA</title>
    <meta name="description" content="Manage your tasks effortlessly with our JavaScript Todos List App. Organize, prioritize, and track your to-dos seamlessly using this user-friendly web application." />
    <meta name="keywords" content="JavaScript Todos List App, Task Management, To-Do List Web App, Organize Tasks, Track To-Dos, Simple Task Manager, Productivity Tool, User-Friendly Interface, Web-based Task Organizer, JavaScript Task Tracker" />
</head>
<body>


    
    <div class="wrapper">
        <div class="screen-backdrop"></div>
        <div class="home-screen screen">
            <div class="head-wrapper">
                <div class="menu-btn">
                    <svg xmlns="" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                    </svg>
                </div>
                <div class="welcome">
                    <div class="content">
                        <h1>Hola, bienvenido/a</h1>
                        <p>Hoy tú tienes <span id="total-tasks">5</span> tareas</p>
                    </div>
                    <div class="img-button">
                        <div class="backdrop"></div>
                        <input type="file" id="profile-image-input" accept="image/*" onchange="previewImage(event)" style="display: none;" />
                        <img src="" id="profile-image" alt="Profile Image" style="display: none; width: 100px; height: 100px; object-fit: cover; border-radius: 50%;" />
                        <button onclick="document.getElementById('profile-image-input').click()">img</button>
                    </div>
                </div>
            </div>
            <div class="categories-wrapper">
                <div class="categories">
                    <div class="category">
                        <div class="left">
                            <img src="" alt="sun" />
                            <div class="content">
                                <h1>Personal</h1>
                                <p>5 Tareas</p>
                            </div>
                        </div>
                        <div class="options">
                            <div class="toggle-btn">
                                <svg xmlns="" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="category-screen screen">
            <div class="head-wrapper">
                <div class="back-btn">
                    <svg xmlns="" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                    </svg>
                </div>
                <div class="options">
                    <svg xmlns="" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                    </svg>
                </div>
            </div>
            <div class="category-details">
                <img src="" alt="" id="category-img" />
                <div class="details">
                    <p id="num-tasks">8 Tareas</p>
                    <h1 id="category-title">Personal</h1>
                </div>
            </div>
            
            <div class="tasks-wrapper">
                <div class="tasks">
                    <div class="task-wrapper">
                        <label for="task" class="task">
                            <input type="checkbox" name="task" id="task" />
                            <span class="checkmark">
                                <svg xmlns="" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </span>
                            <p>Compra</p>
                        </label>
                        <div class="delete">
                            <svg xmlns="" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="add-task-btn">
        </div>

        
        <div class="black-backdrop"></div>
        <div class="add-task">
            <div class="add-task-backdrop"></div>
            <h1 class="heading">Añadir tarea</h1>
            <div class="input-group">
                <label for="task-input"> Tareas</label>
                <input type="text" id="task-input" required />
            </div>
            <div class="input-group">
                <label for="category-select"> Categoría </label>
                <select id="category-select"></select>
            </div>
            <div class="btns">
                <button class="cancel-btn">Cancelar</button>
                <button class="add-btn">Añadir</button>
                <button id="download-pdf-btn">Descargar</button>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

                
            </div>
        </div>
    </div>

    

    <script src="lista.js"></script>
    <script>
        function previewImage(event) {
            const image = document.getElementById('profile-image');
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = function() {
                image.src = reader.result;
                image.style.display = 'block'; // Show the image
            }
            if (file) {
                reader.readAsDataURL(file); // Convert the file to a Data URL
            }
        }

       

    </script>











</body>
</html>



