<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Closed</title>
    <style>
        /* General Reset */
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient( #800080, #c780be);
            color: #fff;
        }

        /* Container Styling */
        .container {
            text-align: center;
            animation: fadeIn 1.5s ease-in-out;
        }

        /* Message Box Styling */
        .message-box {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2);
            animation: slideIn 1.5s ease-in-out;
        }

        /* Title Styling */
        .title {
            font-size: 2.5rem;
            margin: 0;
            animation: bounceIn 1.2s ease-in-out;
        }

        /* Subtitle Styling */
        .subtitle {
            font-size: 1.2rem;
            margin: 15px 0 25px;
            opacity: 0.8;
        }

        /* Button Styling */
        .back-btn {
            text-decoration: none;
            padding: 10px 20px;
            background: #fff;
            color: #800080;
            font-weight: bold;
            border-radius: 5px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, background 0.3s, color 0.3s;
        }

        .back-btn:hover {
            transform: scale(1.1);
            background: #800080;
            color: #fff;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(-50px);
            }
            to {
                transform: translateY(0);
            }
        }

        @keyframes bounceIn {
            0% {
                transform: scale(0.5);
            }
            60% {
                transform: scale(1.2);
            }
            100% {
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="message-box">
            <h1 class="title">Registration Closed</h1>
            <p class="subtitle">Thank you for your interest! Registrations for this event are now closed.</p>
            <a href="#" class="back-btn">Back to Home</a>
        </div>
    </div>
    <script>
        // Optional: Add a fade-out effect when the user clicks "Back to Home"
        document.querySelector('.back-btn').addEventListener('click', (e) => {
            e.preventDefault();
            document.querySelector('.container').style.opacity = '0';
            setTimeout(() => {
                window.location.href = '/'; // Redirect to home after fade-out
            }, 500);
        });
    </script>
</body>
</html>
