<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        .calendar ul li{
            width: calc(100%/7);
            position: relative;
        }
        .calendar .days li{
            cursor: pointer;
            margin-top: 30px;
            z-index: 1;
        }
        .calendar .days li::before{
            position: absolute;
            content: "";
            height: 40px;
            width: 40px;
            top: 50%;
            left: 50%;
            z-index: -1;
            transform: translate(-50%, -50%);
            border-radius: 50%;
        }
        .days li:hover::before{
            background: #f2f2f2;
            z-index: -1;
        }
        .days li.inactive{
            color: #aaa;
        }
        .days li.active{
            color: #fff;
        }
        .days  li.active::before{
            background: rgb(0, 66, 146);

        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-blue-900">
    <div class="wrapper w-[450px] bg-[#fff] rounded-lg">
        <header class="flex items-center justify-between p-4">
            <p class="current-date text-[1.45rem] font-[500]">August 2024</p>
            <div class="icons flex gap-2">
                <span class="w-[38px] h-[38px] hover:bg-slate-300 cursor-pointer flex items-center justify-center bg-slate-100 rounded-full"><i class="fa-solid fa-chevron-left"></i></span>
                <span class="w-[38px] h-[38px] hover:bg-slate-300 cursor-pointer flex items-center justify-center bg-slate-100 rounded-full"><i class="fa-solid fa-chevron-right"></i></span>
            </div>
        </header>
        <div class="calendar p-[20px]">
            <ul class="weeks flex flex-wrap text-center font-semibold">
                <li>Sun</li>
                <li>Mon</li>
                <li>Tue</li>
                <li>Wed</li>
                <li>Thu</li>
                <li>Fri</li>
                <li>Sat</li>
            </ul>
            <ul class="days flex flex-wrap text-center mb-[20px]">
                <li class="inactive">28</li>
                <li class="inactive">29</li>
                <li class="inactive">30</li>
                <li class="inactive">31</li>
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
                <li>6</li>
                <li>7</li>
                <li>8</li>
                <li>9</li>
                <li>10</li>
                <li>11</li>
                <li>12</li>
                <li class="active">13</li>
                <li>14</li>
                <li>15</li>
                <li>16</li>
                <li>17</li>
                <li>18</li>
                <li>19</li>
                <li>20</li>
                <li>21</li>
                <li>22</li>
                <li>23</li>
                <li>24</li>
                <li>25</li>
                <li>26</li>
                <li>27</li>
                <li>28</li>
                <li>29</li>
                <li>30</li>
                <li class="inactive">1</li>
            </ul>
        </div>
    </div>
    <script>

    </script>
</body>
</html>
