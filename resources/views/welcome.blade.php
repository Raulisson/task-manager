<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/inicio.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

    {{-- Calendário --}}
    <script src='{{asset('assets/fullcalendar-6.1.8/dist/index.global.js')}}'></script>
    <script src='{{asset('assets/fullcalendar-6.1.8/packages/core/locale-all.js')}}'></script>

    {{-- Fontawesome --}}
    <script src="https://kit.fontawesome.com/92e90f8568.js" crossorigin="anonymous"></script>

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <title>Início</title>
</head>
<body>
    <div class="navbar">
        @extends('layouts.app')
    </div>
    <div class="max-container">
    <div class="container">
        <p>O Task Manager é uma ferramenta poderosa que pode ajudá-lo a melhorar sua produtividade e organização. Aqui estão alguns dos principais benefícios:</p>

        <ul>
            <li>Organização Eficiente: Mantenha todas as suas tarefas em um só lugar, facilitando priorizá-las e gerenciá-las.</li>
            <li>Prazos e lembretes: estabeleça prazos e receba lembretes, garantindo que você nunca perca uma tarefa ou compromisso importante.</li>
            <li>Aumento de produtividade: mantenha o foco no que é mais importante e aumente sua produtividade geral.</li>
            <li>Gerenciamento de tempo: planeje seu dia, semana ou mês de forma eficaz, alocando tempo para tarefas essenciais.</li>
            <li>Acompanhamento do progresso: monitore seu progresso, marque tarefas como concluídas e tenha uma sensação de realização.</li>
        </ul>

        <a href="/Calendario"><h2>Calendário</h2></a>
        <p>Veja um exemplo de como ficará suas atividades no calendário abaixo:</p>

        <div id="calendar">
            
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    locale: 'pt-br',
                    initialDate: '2023-09-17',
                    navLinks: true,
                    businessHours: true,
                    editable: true,
                    selectable: true,
                    events: [
                    {
                        title: 'Reunião',
                        start: '2023-09-17T13:00:00',
                        constraint: 'businessHours',
                        color: '#257e4a'
                    },
                    {
                        title: 'Entrega Projeto',
                        start: '2023-09-18T11:00:00',
                        constraint: 'availableForMeeting', // defined below
                        color: '#257e4a'
                    },
                    
                    {
                        title: 'Entrega Relatório',
                        start: '2023-09-18T20:00:00'
                    },

                    // areas where "Meeting" must be dropped
                    {
                        groupId: 'availableForMeeting',
                        start: '2023-01-11T10:00:00',
                        end: '2023-01-11T16:00:00',
                        display: 'background'
                    },
                    {
                        groupId: 'availableForMeeting',
                        start: '2023-01-13T10:00:00',
                        end: '2023-01-13T16:00:00',
                        display: 'background'
                    },

                    // red areas where no events can be dropped
                    {
                        start: '2023-01-24',
                        end: '2023-01-28',
                        overlap: false,
                        display: 'background',
                        color: '#ff9f89'
                    },
                    {
                        start: '2023-01-06',
                        end: '2023-01-08',
                        overlap: false,
                        display: 'background',
                        color: '#ff9f89'
                    }
                    ]
                });
                calendar.render();
                });
        </script>
        </div>
    </div>
    </div>
</body>
</html>
