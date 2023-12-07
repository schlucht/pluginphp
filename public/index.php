<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
    <title>My Document</title>
</head>
<body>
    <main>
        <section class="left">
             <div class="left-user">
                <img src="/assets/images/user2.jpg" alt="">
                <h3 class="left-name">Schmid Lothar</h3>
                <p class="left-email">web@mail.ch</p>
             </div>
             <div class="left-nav">
                <nav>
                    <ul>
                        <li>
                            <a href="">Icon 1</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
        <section class="right">
            <header class="header">
                <h1>My Chat</h1>
            </header>
            <section class="peoples">
                <article class="search">
                    <input type="text" placeholder="Search">
                    <span>+</span>
                </article>
                <article class="user">
                    <img class="user-image" src="assets/images/user1.jpg" >
                    <div class="user-name">
                        <p>Schmid Lothar</p>
                        <p>Bin in Arbeit...</p>
                    </div>
                    <span class="user-posts">5</span>
                </article>
                <article class="user">
                    <img class="user-image" src="assets/images/user2.jpg" >
                    <div class="user-name">
                        <p>Wyssen Sepp</p>
                        <p>Gleich da</p>
                    </div>
                    <span class="user-posts">15</span>     
                </article>
                <article class="user">
                    <img class="user-image" src="assets/images/user3.jpg" >
                    <div class="user-name">
                        <p>Schmid Janina</p>
                        <p>Bin in 😀😍</p>
                    </div>
                    <span class="user-posts">3</span>
                </article>
            </section>
            <section class="chats">
                <div class="chat-title">
                    <div class="chat-status">
                        <span>Schmid Lothar</span>                    
                        <span class="chat-status__color">&nbsp;</span>
                        <span>online</span>
                    </div>
                    <span>📂</span>
                </div>
                <div class="chats-in">
                    <img class="user-image" src="assets/images/user1.jpg" >
                    <article class="chat-item">
                        <span class="chat-post">
                            Wie gehts dir?
                        </span>
                        <span class="chat-date">
                            06-12 13:35 PM
                        </span>
                    </article>
                </div>
                <div class="chats-out">
                    <article class="chat-item">
                        <span class="chat-post">
                            Mir geht es gut!
                        </span>
                        <span class="chat-date">
                            06-12 13:36 PM
                        </span>
                    </article>
                    <img class="user-image" src="assets/images/user2.jpg" >
                </div>
                <div class="day-line">
                    <span class="day-line-date">Freitag 12:34</span>
                </div>
                <div class="chats-msg">
                    <form action="">
                        <input type="text" placeholder="neue Nachricht">
                        <input type="submit" value="Senden">
                    </form>
                </div>
            </section>
        </section>
    </main>
</body> 