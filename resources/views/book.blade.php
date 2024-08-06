<!DOCTYPE html>
<html lang="en">
<x-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Book Appointment</title>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            .time-slot {
                cursor: pointer;
                margin: 5px;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 5px;
                display: inline-block;
                background-color: #f9f9f9;
            }
            .time-slot.selected {
                background-color: #007bff;
                color: white;
            }
        </style>
    </head>
    <body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Book Your Appointment</h2>
        <form id="booking-form" action="/submit-booking" method="POST">
            @csrf
            <div class="form-group">
                <label for="appointment-date">Select Date</label>
                <input type="text" id="appointment-date" name="appointment_date" class="form-control" placeholder="Pick your preferred appointment date" required>
            </div>
            <div class="form-group">
                <label for="appointment-time">Select Time</label>
                <div id="time-slots" class="text-black">
                    <!-- Time slots will be generated here -->
                </div>
                <input type="hidden" id="appointment-time" name="appointment_time" required>
            </div>
            <button type="submit" class="btn btn-primary">Book Appointment</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {
            $('#appointment-date').datepicker({
                dateFormat: 'yy-mm-dd',
                minDate: 0, // disable past dates
                onSelect: function(dateText) {
                    generateTimeSlots();
                }
            });

            function generateTimeSlots() {
                const timeSlots = [
                    '09:00 AM', '10:00 AM', '11:00 AM', '12:00 PM',
                    '01:00 PM', '02:00 PM', '03:00 PM', '04:00 PM',
                    '05:00 PM', '06:00 PM'
                ];
                const $timeSlotsContainer = $('#time-slots');
                $timeSlotsContainer.empty();
                timeSlots.forEach(slot => {
                    const $slot = $('<div>').addClass('time-slot').text(slot);
                    $slot.click(function() {
                        if (!$('#appointment-date').val()) {
                            alert('Please select a date first.');
                            return;
                        }
                        $('.time-slot').removeClass('selected');
                        $(this).addClass('selected');
                        $('#appointment-time').val(slot);
                    });
                    $timeSlotsContainer.append($slot);
                });
            }

            // Initialize the datepicker and time slots on page load
            $('#appointment-date').datepicker('setDate', new Date());
            generateTimeSlots();

            // Handle form submission
            $('#booking-form').submit(function(event) {
                if (!$('#appointment-date').val() || !$('#appointment-time').val()) {
                    alert('Please select both a date and a time.');
                    event.preventDefault();
                }
            });
        });
    </script>
    </body>
</html>

</x-layout>
