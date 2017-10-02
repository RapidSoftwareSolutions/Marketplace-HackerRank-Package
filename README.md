[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/HackerRank/functions?utm_source=RapidAPIGitHub_HackerRankFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# HackerRank Package
The HackerRank team is on a mission to match every developer in the world to the right job by providing a technical recruiting platform that assesses developers based on actual coding skills. Our solution is revolutionizing the way companies discover and evaluate talented developers. HackerRank is the destination for the best developers to hone their skills and for companies to find top software developers.
* Domain: [www.hackerrank.com](https://www.hackerrank.com)
* Credentials: apiKey

## How to get credentials: 
0. Register on the [www.hackerrank.com](https://www.hackerrank.com)
1. After registration, you will receive apiKey in [api section](https:\/\/www.hackerrank.com\/api\/docs) 

 ## Custom datatypes: 
  |Datatype|Description|Example
  |--------|-----------|----------
  |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
  |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
  |List|Simple array|```["123", "sample"]``` 
  |Select|String with predefined values|```sample```
  |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```   

## HackerRank.createSubmission
Allows users to use the HackerRank code checker for their own purposes. Submit source code, which is compiled and run against a list of provided test cases.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Your HackerRank API key.
| sourceCode | String     | The source code, which needs to be compiled and run against the provided test cases.
| language   | String     | The language key for the language, the submission is made in. The data about language keys is available through the languages endpoint.
| testCases  | String     | A valid JSON, which on parse should result in a list of strings.
| wait       | Select     | `true` - The response is sent only after the submission is compiled and run.`false` - The request returns immediately and submission response will posted through the callback URL.
| callbackUrl| String     | A callback url, on which the submission response will be posted as a JSON string under `data` parameter.

## HackerRank.getProgrammingLanguages
This method provides you with information regarding the language codes which our code checker supports.

No arguments.

