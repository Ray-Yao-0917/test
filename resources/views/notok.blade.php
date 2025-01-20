<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>網站維護中</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .maintenance-container {
            text-align: center;
            padding: 2rem;
            max-width: 600px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(31, 38, 135, 0.15);
            margin: 20px;
        }
        
        .icon {
            width: 120px;
            height: 120px;
            margin-bottom: 1.5rem;
        }
        
        h1 {
            color: #2d3748;
            margin-bottom: 1rem;
            font-size: 2rem;
        }
        
        p {
            color: #4a5568;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }
        
        .estimate {
            background-color: #edf2f7;
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1.5rem;
        }
        
        .contact {
            font-size: 0.9rem;
            color: #718096;
        }
        
        @media (max-width: 480px) {
            .maintenance-container {
                padding: 1.5rem;
            }
            
            h1 {
                font-size: 1.5rem;
            }
            
            .icon {
                width: 80px;
                height: 80px;
            }
        }
    </style>
</head>
<body>
    <div class="maintenance-container">
        <svg class="icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" stroke="#4299E1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        
        <h1>網站維護中</h1>
        
        <p>親愛的用戶您好，我們正在進行系統維護及升級，以提供您更好的服務體驗。造成不便之處，敬請見諒。</p>
        
        <div class="estimate">
            <p>預計維護時間：<br>2024/01/20 22:00 - 2024/01/21 06:00</p>
        </div>
        
        <p class="contact">
            如有任何問題，請聯繫我們：<br>
            Email: support@example.com<br>
            電話: (02) 1234-5678
        </p>
    </div>
</body>
</html>