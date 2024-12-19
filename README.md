# Railway Line Search

This project allows users to search for railway lines between two stations, supporting transfers (connecting multiple lines). The search is based on two input parameters: the starting station and the destination station. If there are multiple lines with transfers, the user receives all relevant information.

## Technologies

- **PHP**
- **Laravel**
- **Composer**
- **Bootstrap** (CSS framework za responzivni dizajn)
- **jQuery** (za Ajax funkcionalnost)
- **MySQL**

# Database Structure
## The project uses two tables in the database:
    'linije': Stores information about railway lines, including travel direction, line name, departure and arrival times, and associated stations.
    'stanice': Stores information about the stations, including their names.

# Features
## Railway Line Search
    Users can search for railway lines between two stations using the following parameters:
        Od stanice: Selection of the starting station..
        Do stanice: Selection of the destination station.

    The search allows for:
        Normal direction: From the starting station to the destination.
        Reverse direction: From the destination to the starting station.

    If multiple lines with transfers are available, all relevant lines with station and time information are shown.

# Backend
## The controller is used for handling stations and lines in the railway application. It consists of two main functions:
        index() – Displays a list of all stations
            Stanica::all(): Retrieves all stations from the database.
            $stations->map(...): Maps the stations to only return the necessary data: id and name.
            return view('welcome', ...): Passes the result to the welcome view, which displays the stations in a dropdown menu on the front-end.

        search(Request $request) – Performs a search for lines between two stations based on user input
            $from and $to: These values come from the user's input via the POST request, representing the selected stations.
            $smerPutovanja:  Determines if the requested travel direction is normal or reverse. In this example, if the starting station (from) is greater than the destination station (to), the reverse direction is assumed.
            $linije: All line data is retrieved from the database using the DB::table() method, joining the stanice table to get additional station information.
            array_filter: Filters the lines based on the direction and station range.
            array_reduce: Groups the lines by their line name for easier display.
            response()->json(...): Returns the filtered and grouped lines in JSON format as a response to the AJAX request from the front-end.

# How It Connects to the Front-End:
    The form in welcome.blade.php sends the user input for the starting (od_stanice) and destination station (do_stanice) via an AJAX request to the /search route, which calls this function.
    Result routing to #searchResults: When the data is returned in JSON format, the results are dynamically displayed in an HTML table or as an error message if no lines are found.

# Responsive Design
    The frontend uses Bootstrap for responsive design, making the application usable on all devices, including mobile phones and desktop computers.

# Transfer Search
    If the user wants information about lines requiring transfers, the system will automatically connect lines that allow travel to the destination.

# Front-End
    The front-end is based on HTML, CSS (Bootstrap), and jQuery. Line search is performed using Ajax methods that allow users to get results without refreshing the page.

# HTML Structure (welcome.blade.php)
    The page contains a form with two dropdown menus (starting and destination stations) and a search button. There is also a button for swapping the starting and destination stations.

#Author
Name: Stankovic Milan
Email: milanstankovic19939@gmail.com
