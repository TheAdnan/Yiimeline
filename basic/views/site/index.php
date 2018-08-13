
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>

        body {
            font-family: Arial;
            width: 900px;
            padding: 10px;
        }
        .search-form-container {
            background: #F0F0F0;
            border: #e0dfdf 1px solid;
            padding: 20px;
            border-radius: 2px;
        }
        .input-row {
            margin-bottom: 20px;
        }
        .input-field {
            width: 100%;
            border-radius: 2px;
            padding: 10px;
            border: #e0dfdf 1px solid;
        }
        .btn-submit {
            padding: 10px 20px;
            background: #333;
            border: #1d1d1d 1px solid;
            color: #f0f0f0;
            font-size: 0.9em;
            width: 100px;
            border-radius: 2px;
            cursor:pointer;
        }
        .videos-data-container {
            background: #F0F0F0;
            border: #e0dfdf 1px solid;
            padding: 20px;
            border-radius: 2px;
        }

        .response {
            padding: 10px;
            margin-top: 10px;
            border-radius: 2px;
        }

        .error {
             background: #fdcdcd;
             border: #ecc0c1 1px solid;
        }

       .success {
            background: #c5f3c3;
            border: #bbe6ba 1px solid;
        }
        .result-heading {
            margin: 20px 0px;
            padding: 20px 10px 5px 0px;
            border-bottom: #e0dfdf 1px solid;
        }
        iframe {
            border: 0px;
        }
        .video-tile {
            display: inline-block;
            margin: 10px 10px 20px 10px;
        }

        .videoDiv {
            width: 250px;
            height: 150px;
            display: inline-block;
        }
        .videoTitle {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }

        .videoDesc {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }
        .videoInfo {
            width: 250px;
        }
    </style>

</head>

      <body>
<div class="site-index">

    <div class="jumbotron">
        <h1>YouTube API PHP!</h1>
        <!--Api key: "AIzaSyB72OI8GKAXbwbgL7AtMjq7rOWpdMGfq6A"
             OauthClient ID: ""     -->

        <p class="lead">This is my first take on Youtube API with PHP Yii-powered application.</p>

                <h2>Search Videos by keyword using YouTube Data API V3</h2>
                <div class="search-form-container">
                    <form id="keywordForm" method="post">
                        <div class="input-row">
                            Search Keyword : <input class="input-field" type="search" id="keyword" name="keyword"  placeholder="Enter Search Keyword">
                        </div>
                        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                        <input class="btn-submit"  type="submit" name="submit" value="Search">
                    </form>
                </div>



                    <div class="videos-data-container" id="SearchResultsDiv">

                </div>


          </body>
