# Team-16
<br>
This is our Website for the theme " Fitness and Sports " named SPORTIN360
<br>
Key concepts
<br>
Fitness: The state of being physically healthy and well.
<br>
Sports: Physical activities that require physical exertion and skill and are often governed by a set of rules.<br>
Exercise: Bodily activity that enhances or maintains physical fitness and overall health and wellness.<br>
Nutrition: The science of eating healthy foods to maintain or improve overall health.<br>
Training: The process of acquiring knowledge or skills through teaching or study.<br><br>


# Google Fit Steps

A simple app showing your last weeks steps synced into Google FIT
To run the app you will need to set up an OAuth2 App in the [Google Projects Console](https://console.developers.google.com/flows/enableapi?apiid=fitness)

Add a new **OAuth2 Credential** together with an appropriate **Consent Form**.

Name your app whatever you like. You will however need these redirect urls added to the app: 
```
http://localhost:5999/
http://localhost:5999/steps
```

Then create your `.env` file and place the `ClientId` and `ClientSecret` variables for authentication.

Run app with `npm start` and happy stepping!



