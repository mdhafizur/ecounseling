<!DOCTYPE html>
<html>

<head>
    <title>E-Counseling</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://unpkg.com/jquery"></script>
    <script src="https://surveyjs.azureedge.net/1.1.8/survey.jquery.js"></script>
    <link href="https://surveyjs.azureedge.net/1.1.8/survey.css" type="text/css" rel="stylesheet" />


</head>

<body>
    <div id="surveyElement1"></div>
    <div id="surveyResult"></div>





    <script>
        var json = {
            "title": "Anxiety Questionnaire",
            "description": "Over the last 2 weeks, how often have you been bothered by any of the following problem?\n\n",
            "completedHtmlOnCondition": [{
                "expression": "({question1}+{question2}+{question3}+{question4}+{question5}+{question6}+{question7}<=4",
                "html": "<h1>Minimal Anxiety<h1>"
            }, {}, {
                "expression": "({question1}+{question2}+{question3}+{question4}+{question5}+{question6}+{question7}<=9 and ({question1}+{question2}+{question3}+{question4}+{question5}+{question6}+{question7}>=5",
                "html": "<h1>Mild Anxiety</h1>"
            }, {
                "expression": "({question1}+{question2}+{question3}+{question4}+{question5}+{question6}+{question7}<=14 and ({question1}+{question2}+{question3}+{question4}+{question5}+{question6}+{question7}>=10",
                "html": "<h1>Moderate Anxiety</h1>"
            }, {
                "expression": "({question1}+{question2}+{question3}+{question4}+{question5}+{question6}+{question7}>=15",
                "html": "<h1>Severe Anxiety</h1>"
            }],
            "pages": [{
                "name": "page1",
                "elements": [{
                        "type": "rating",
                        "name": "question1",
                        "title": "Feeling nervous or on edge?",
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
                        "name": "question2",
                        "title": "Not being able to stop or control worrying",
                        "isRequired": true,
                        "rateValues": [{
                                "value": "0",
                                "text": "Not at all"
                            }, {
                                "value": "1",
                                "text": "Several Days"
                            },
                            {
                                "value": "2",
                                "text": "More than half the days"
                            }, {
                                "value": "3",
                                "text": "Nearly every day"
                            }
                        ],
                        "rateMax": 3
                    }, {
                        "type": "rating",
                        "name": "question3",
                        "title": "Worrying too much about different things",
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
                        "title": "Trouble relaxing",
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
                        "name": "question5",
                        "title": "Being so restless that it is hard to sit still",
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
                        "title": "Becoming easily annoyed or irritable",
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
                        "title": "Feeling afraid as if something awful might happen",
                        "isRequired": true,
                        "rateValues": [{
                                "value": "0",
                                "text": "Not at all"
                            }, {
                                "value": "1",
                                "text": "Several Days"
                            },
                            {
                                "value": "2",
                                "text": "More than half the days"
                            }, {
                                "value": "3",
                                "text": "Nearly every day"
                            }
                        ],
                        "rateMax": 3
                    }
                ]
            }]
        };
        window.survey = new Survey.Model(json);
        survey.onComplete.add(function (result) {
            document.querySelector('#surveyResult').textContent = "Result JSON:\n" + JSON.stringify(result.data,
                null, 3);
        });
        $("#surveyElement1").Survey({
            model: survey
        });

    </script>
</body>

</html>
