<?php
/*** Part 3: Require the function, build the path, and read the CSV rows. ***/

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Games CSV Lab</title>
    <style>
        body {
            max-width: 900px;
            margin: 0 auto;
            padding: 2rem;
            color: #1a202c;
            background: #edf2f7;
            font-family: Arial, sans-serif;
        }

        main {
            padding: 1.5rem;
            border-radius: 8px;
            background: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .08);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: .75rem;
            border: 1px solid #cbd5e0;
            text-align: left;
        }

        th {
            color: white;
            background: #2a4365;
        }

        tbody tr:nth-child(even) {
            background: #f7fafc;
        }
    </style>
</head>
<body>
    <main>
        <h1>Games CSV Lab</h1>

        <!-- Part 3: Show a friendly message when $rows is empty. -->

        <!-- Part 3: Otherwise, loop through $rows in this table. -->
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Console</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <!-- Replace this sample row with the PHP loop. -->
                <tr>
                    <td>Sample Game</td>
                    <td>Sample Console</td>
                    <td>$0.00</td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>
