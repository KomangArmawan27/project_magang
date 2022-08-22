<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanggungan</title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/b-2.2.3/sb-1.3.4/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/home_page.css" />

</head>


<body>
    <div id="datables">
        <table id="table_id">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Occupation</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ram</td>
                    <td>21</td>
                    <td>Male</td>
                    <td>Doctor</td>
                </tr>
                <tr>
                    <td>Mohan</td>
                    <td>32</td>
                    <td>Male</td>
                    <td>Teacher</td>
                </tr>
                <tr>
                    <td>Rani</td>
                    <td>42</td>
                    <td>Female</td>
                    <td>Nurse</td>
                </tr>
                <tr>
                    <td>Johan</td>
                    <td>23</td>
                    <td>Female</td>
                    <td>Software Engineer</td>
                </tr>
                <tr>
                    <td>Shajia</td>
                    <td>39</td>
                    <td>Female</td>
                    <td>Farmer</td>
                </tr>
                <tr>
                    <td>Jack</td>
                    <td>19</td>
                    <td>Male</td>
                    <td>Student</td>
                </tr>
                <tr>
                    <td>Hina</td>
                    <td>30</td>
                    <td>Female</td>
                    <td>Artist</td>
                </tr>
                <tr>
                    <td>Gauhar</td>
                    <td>36</td>
                    <td>Female</td>
                    <td>Artist</td>
                </tr>
                <tr>
                    <td>Jacky</td>
                    <td>55</td>
                    <td>Female</td>
                    <td>Bank Manager</td>
                </tr>
                <tr>
                    <td>Pintu</td>
                    <td>36</td>
                    <td>Male</td>
                    <td>Clerk</td>
                </tr>
                <tr>
                    <td>Sumit</td>
                    <td>33</td>
                    <td>Male</td>
                    <td>Footballer</td>
                </tr>
                <tr>
                    <td>Radhu</td>
                    <td>40</td>
                    <td>Female</td>
                    <td>Coder</td>
                </tr>
                <tr>
                    <td>Mamta</td>
                    <td>49</td>
                    <td>Female</td>
                    <td>Student</td>
                </tr>
                <tr>
                    <td>Priya</td>
                    <td>36</td>
                    <td>Female</td>
                    <td>Worker</td>
                </tr>
                <tr>
                    <td>Johnny</td>
                    <td>41</td>
                    <td>Male</td>
                    <td>Forest Officer</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/b-2.2.3/sb-1.3.4/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#table_id').DataTable();
    });
</script>

</html>