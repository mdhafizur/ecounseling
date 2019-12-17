<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://unpkg.com/jquery"></script>
<script src="https://surveyjs.azureedge.net/1.1.8/survey.jquery.js"></script>
<link href="https://surveyjs.azureedge.net/1.1.8/survey.css" type="text/css" rel="stylesheet" />



<div id="surveyElement"></div>
<div id="surveyResult1"></div>





<script>
    var json = {
        "title": "Depression Questionnaire",
        "description": "Over the last 2 weeks, how often have you been bothered by any of the following problem?\n\n",
        "completedHtmlOnCondition": [{
            "expression": "({question1}+{question2}+{question3}+{question4}+{question5}+{question6}+{question7}+{question8}+{question9}<=4",
            "html": "<h1>Minimal Depression<h1> "
        }, {}, {
            "expression": "({question1}+{question2}+{question3}+{question4}+{question5}+{question6}+{question7}+{question8}+{question9}<=9 and ({question1}+{question2}+{question3}+{question4}+{question5}+{question6}+{question7}+{question8}+{question9}>=5",
            "html": "<h1>Mild Depression</h1>"
        }, {
            "expression": "({question1}+{question2}+{question3}+{question4}+{question5}+{question6}+{question7}+{question8}+{question9}<=14 and ({question1}+{question2}+{question3}+{question4}+{question5}+{question6}+{question7}+{question8}+{question9}>=10",
            "html": "<h1>Moderate Depression</h1>"
        }, {
            "expression": "({question1}+{question2}+{question3}+{question4}+{question5}+{question6}+{question7}+{question8}+{question9}>=15",
            "html": "<h1>Severe Depression <br> <br> You should make an appointment with a counselor as soon as possible.</h1>"
        }],
        "pages": [{
            "name": "page1",
            "elements": [{
                    "type": "rating",
                    "name": "question1",
                    "title": "Little interest or pleasure in doing things",
                    "isRequired": true,
                    "rateValues": [{
                        "value": "0",
                        "text": "Not at all"
                    }, {
                        "value": "1",
                        "text": "Several Days"
                    }, {
                        "value": "2",
                        "text": "More than half the days"
                    }, {
                        "value": "3",
                        "text": "Nearly every day"
                    }],
                    "rateMax": 3
                },
                {
                    "type": "rating",
                    "name": "question2",
                    "title": "Feeling down, depressed or hopeless",
                    "isRequired": true,
                    "rateValues": [{
                        "value": "0",
                        "text": "Not at all"
                    }, {
                        "value": "1",
                        "text": "Several Days"
                    }, {
                        "value": "2",
                        "text": "More than half the days"
                    }, {
                        "value": "3",
                        "text": "Nearly every day"
                    }],
                    "rateMax": 3
                }, {
                    "type": "rating",
                    "name": "question3",
                    "title": "Trouble falling or staying asleep or sleeping too much",
                    "isRequired": true,
                    "rateValues": [{
                        "value": "0",
                        "text": "Not at all"
                    }, {
                        "value": "1",
                        "text": "Several Days"
                    }, {
                        "value": "2",
                        "text": "More than half the days"
                    }, {
                        "value": "3",
                        "text": "Nearly every day"
                    }],
                    "rateMax": 3
                }, {
                    "type": "rating",
                    "name": "question4",
                    "title": "Feeling tired or having little energy",
                    "isRequired": true,
                    "rateValues": [{
                        "value": "0",
                        "text": "Not at all"
                    }, {
                        "value": "1",
                        "text": "Several Days"
                    }, {
                        "value": "2",
                        "text": "More than half the days"
                    }, {
                        "value": "3",
                        "text": "Nearly every day"
                    }],
                    "rateMax": 3
                }, {
                    "type": "rating",
                    "name": "question5",
                    "title": "Poor appetite or overeating",
                    "isRequired": true,
                    "rateValues": [{
                        "value": "0",
                        "text": "Not at all"
                    }, {
                        "value": "1",
                        "text": "Several Days"
                    }, {
                        "value": "2",
                        "text": "More than half the days"
                    }, {
                        "value": "3",
                        "text": "Nearly every day"
                    }],
                    "rateMax": 3
                }, {
                    "type": "rating",
                    "name": "question6",
                    "title": "Feeling bad about yourself or that you are a failure or have let yourself or your family down",
                    "isRequired": true,
                    "rateValues": [{
                        "value": "0",
                        "text": "Not at all"
                    }, {
                        "value": "1",
                        "text": "Several Days"
                    }, {
                        "value": "2",
                        "text": "More than half the days"
                    }, {
                        "value": "3",
                        "text": "Nearly every day"
                    }],
                    "rateMax": 3
                }, {
                    "type": "rating",
                    "name": "question7",
                    "title": "Trouble concentrating on things, such as reading the newspaper or watching the television",
                    "isRequired": true,
                    "rateValues": [{
                        "value": "0",
                        "text": "Not at all"
                    }, {
                        "value": "1",
                        "text": "Several Days"
                    }, {
                        "value": "2",
                        "text": "More than half the days"
                    }, {
                        "value": "3",
                        "text": "Nearly every day"
                    }],
                    "rateMax": 3
                }, {
                    "type": "rating",
                    "name": "question8",
                    "title": "Moving or speaking so slowly that other people could have noticed?  Or the opposite - being so fidgery or restless that you have been moving around a lot more than usual",
                    "isRequired": true,
                    "rateValues": [{
                        "value": "0",
                        "text": "Not at all"
                    }, {
                        "value": "1",
                        "text": "Several Days"
                    }, {
                        "value": "2",
                        "text": "More than half the days"
                    }, {
                        "value": "3",
                        "text": "Nearly every day"
                    }],
                    "rateMax": 3
                }, {
                    "type": "rating",
                    "name": "question9",
                    "title": "Thoughts that you would be better off dead of or hurting yourself in some way",
                    "isRequired": true,
                    "rateValues": [{
                        "value": "0",
                        "text": "Not at all"
                    }, {
                        "value": "1",
                        "text": "Several Days"
                    }, {
                        "value": "2",
                        "text": "More than half the days"
                    }, {
                        "value": "3",
                        "text": "Nearly every day"
                    }],
                    "rateMax": 3
                }
            ]
        }]
    };
    window.survey = new Survey.Model(json);
    survey.onComplete.add(function (result) {
        document.querySelector('#surveyResult1').textContent = "Result JSON:\n" + JSON.stringify(result.data,
            null, 3);
    });
    $("#surveyElement").Survey({
        model: survey,
        onComplete: sendDataToServer
    });

    function sendDataToServer(survey) {
        // var resultAsString = JSON.stringify(survey.data);
        var quest_result_sum = 3; //take data from survey var
        var quest_result_text = JSON.stringify(result.data) //take data from survey var
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("PATCH", "/student");
        xmlhttp.setRequestHeader("Content-Type", "application/json");
        xmlhttp.send(JSON.stringify({
            quest_result_sum: quest_result_sum,
            quest_result_text: quest_result_text
        }));
    }

</script>
