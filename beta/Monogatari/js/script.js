// Define the messages used in the game.
var messages = {
	"Help": {
		"Title": "Help",
		"Subtitle": "Some useful Links",
		"Message": "<p><a href='http://monogatari.hyuchia.com/documentation/'>Documentation</a> - Everything you need to know.</p><p><a href='http://monogatari.hyuchia.com/demo/'>Demo</a> - A simple Demo.</p>"
	}
}

// Define the notifications used in the game
var notifications = {
	"Welcome": {
		title: "Welcome",
		body: "This is the Monogatari VN Engine",
		icon: ""
	}
}

// Define the Particles JS Configurations used in the game
var particles = {

}

// Define the music used in the game.
var music = {

}

// Define the voice files used in the game.
var voice = {

}

// Define the sounds used in the game.
var sound = {

}

// Define the videos used in the game.
var videos = {

}

// Define the images used in the game.
var images = {

}

// Define the backgrounds for each scene.
var scenes = {
	"classroom":"classroom.jpg",
	"supermarket":"supermarket.jpg"
}

// Define the Characters
var characters = {
	"sachi": {
		"Name": "Sachi",
		"Color": "#5bcaff",
		"Directory":"Sachi",
		"Images":{
			"Normal":"sachinormal.png",
			"Happy":"sachi.png"
		}
	},
	"henrik":{
		"Name":"Henrik",
		"Color":"#5bcaff",
		"Directory":"Henrik",
		"Images":{
			"Normal":"henrik_normal.png",
			"Happy":"henrik_smile.png"
		}
	}
}
var script = {
	// The game starts here.

	"Start": [

		"scene classroom",
		"show sachi Happy center with fadeIn",
		"notify Welcome",

		"sachi Hi {{player.Name}} Welcome to Basic English Tutoring Aid!",
		"show sachi Normal right",
		{"Choice": {
			"Dialog": "sachi Which lesson are we going to study today?",
			"Possessive": {
				"Text": "Possessive Nouns",
				"Do": "jump Possessive"
			},
			"Pronouns": {
				"Text": "Pronouns",
				"Do": "jump Pronouns"
			},
			"BeVerbs": {
				"Text": "Be Verbs",
				"Do": "jump BeVerbs"
			},
			"ActionVerbs": {
				"Text": "Action Verbs",
				"Do": "jump ActionVerbs"
			},
			"Adjectives":{
				"Text": "Adjectives",
				"Do": "jump Adjectives"
			}
		}
		}
	],
	// Possessive Noun Questions
	"Possessive": [
		"sachi Possessive nouns are used to indicate ownership ",
		"sachi Possessive nouns usually are formed by adding an apostrophe (') and s.",
		"sachi Examples: John's Book, Kerry's Car, Grandma's Mirror",
		"jump QuestionPossessiveOne",
	],
	"QuestionPossessiveOne":[
		"Now for question #1",
		"change QuestionPossessiveTwo",//magpapalit ng label
		{"Choice":{
			"Dialog":"sachi Which of the following is correct?",
			"Incorrect":{
				"Text":"Liandrys Torment costs around 3100 gold",
				"Do":"jump Incorrect"
			}
			,
			"Correct":{
				"Text":"Rakan and Xayah's teamwork is perfect",
				"Do":"jump Correct"
			}
		}
		}
	],
	"QuestionPossessiveTwo":[
		"Now for question #2",
		"change QuestionPossessiveThree",
		{"Choice":{
			"Dialog":"sachi Which of the following iscorrect?",
			"Incorrect":{
				"Text":"This bow belongs to Vaynes",
				"Do":"jump Incorrect"
			}
			,
			"Correct":{
				"Text":"Ms. Ahri's Star Guardian skin will be available this week.",
				"Do":"jump Correct"
			},
			"Incorrect1":{
				"Text":"This bow belongs to Vaynes",
				"Do":"jump Incorrect"
			}
		}
		}
	],

	"QuestionPossessiveThree":[
		"Now for question #3",
		"change QuestionPossessiveFour",
		{
			"Choice":{
				"Dialog" : "sachi Which of the following is correct?",
				"Incorrect":{
					"Text":"Mrs. Smiths husband often gives her flowers",
					"Do":"jump Incorrect"
				},
				"Correct":{
					"Text":"Mrs. Smith's husband often gives her flowers",
					"Do":"jump Correct"
				}
			}
		}
	]
	,
	"QuestionPossessiveFour":[
		"Now for question #4",
		"change Complete",
		{
			"Choice":{
				"Dialog" : "sachi Which of the following is correct?",
				"Incorrect":{
					"Text":"When the childs toy broke, I fixed them.",
					"Do":"jump Incorrect"
				},
				"Correct":{
					"Text":"When the child's toy broke, I fixed them.",
					"Do":"jump Correct"
				}
			}
		}
	]
	,
	"Complete":[
		"show "+character+" Happy center",
		"finish",
		"Congratulations for finishing this topic. I hope you learn something",
	]
	,
	//End Possessive Nouns Questions
	//Start Pronouns Questions
	"Pronouns": [
		"sachi Pronouns takes the place of a noun. ",
		"sachi Here are some examples of Pronouns: He, She, It, They, I, You, etc.",
		"sachi Example: Mary is one of the heads of the ToJi Corporation. Becomes: She is one of the heads of the ToJi Corporation.",
		"Mary, Mr. James, and Tom researched and invented a drug for cancer treatment. Becomes: They researched and invented a drug for cancer treatment.",
		"jump QuestionPronounsOne"
	],
	"QuestionPronounsOne":[
		"Now for question #1",
		"change QuestionPronounsTwo",
		{"Choice":
		 {"Dialog": "sachi What is the pronoun in the sentence: Joe studies at UE, he is a college student.",
		  "Incorrect":{
			  "Text":"Joe",
			  "Do":"jump Incorrect"
		  },
		  "Correct":{
			  "Text":"He",
			  "Do": "jump Correct"
		  }
		 }
		}
	]
	,//missing yung two
	"QuestionPronounsThree":[
		"Now for question #3",
		"change QuestionPronounsFour",
		{"Choice":
		 {"Dialog": "sachi What is the pronoun in the sentence: Sarah and Steve are outside, they are playing tennis.",
		  "Correct":{
			  "Text":"They",
			  "Do":"jump Correct"
		  },
		  "Incorrect":{
			  "Text":"Sarah and Steve",
			  "Do": "jump Incorrect"
		  }
		 }
		}
	]
	,
	"QuestionPronounsFour":[
		"Now for question #4",
		"change Complete",
		{"Choice":
		 {"Dialog": "sachi What is the pronoun in the sentence: John and I are studying. We have an exam tomorrow.",
		  "Correct":{
			  "Text":"We",
			  "Do":"jump Correct"
		  },
		  "Incorrect":{
			  "Text":"John and I",
			  "Do": "jump Incorrect"
		  }
		 }
		}
	],
	//End Pronouns Questions
	//Start Be Verbs Questions
	"BeVerbs":[
		"sachi 'Be' Verbs show action or a state of being",
		"sachi Sarah <i>goes</i> to school. School is her place to rest. She <i>likes</i> her friends at school. She <i>feels</i> relaxed. At school, she <i>learns</i> new things.",
		"sachi 'Be' Verbs must match the subject. Examples: I <i>am</i> alone. They <i>are</i> walking together.",
		"sachi 'Be' Verbs are follwed by a 'not' to form a negative sentence. Examples: I <i>am not</i> alone. They <i>are not</i> walking together.",
		"sachi 'Be' Verbs are the first word in questions. Examples: <i>Am</i> I alone? <i>Are</i> they walking together?",
		"jump QuestionBeVerbsOne"
	],
	"QuestionBeVerbsOne":[
		"Now for question #1",
		"change QuestionBeVerbsTwo",
		{"Choice":
		 {"Dialog": "sachi Choose the correct verb to complete the sentence: She _____ sleeping right now.",
		  "Correct":{
			  "Text":"Is",
			  "Do":"jump Correct"
		  },
		  "Incorrect":{
			  "Text":"Was",
			  "Do": "jump Incorrect"
		  }
		 }
		}
	],
	"QuestionBeVerbsTwo":[
		"Now for question #2",
		"change QuestionBeVerbsThree",
		{"Choice":
		 {"Dialog": "sachi Choose the correct verb to complete the sentence: Have you ever _____ to New York?",
		  "Incorrect":{
			  "Text":"Was",
			  "Do":"jump Incorrect"
		  },
		  "Correct":{
			  "Text":"Been",
			  "Do": "jump Correct"
		  }
		 }
		}
	],
	"QuestionBeVerbsThree":[
		"Now for question #3",
		"change QuestionBeVerbsFour",
		{"Choice":
		 {"Dialog": "sachi Choose the correct verb to complete the sentence: _____ you ready?",
		  "Incorrect":{
			  "Text":"Is",
			  "Do":"jump Incorrect"
		  },
		  "Correct":{
			  "Text":"Are",
			  "Do": "jump Correct"
		  }
		 }
		}
	],
	"QuestionBeVerbsFour":[
		"Now for question #4",
		"change Complete",
		{"Choice":
		 {"Dialog": "sachi Choose the correct verb to complete the sentence: Henry _____ not coming.",
		  "Correct":{
			  "Text":"Is",
			  "Do":"jump Correct"
		  },
		  "Incorrect":{
			  "Text":"Am",
			  "Do": "jump Incorrect"
		  }
		 }
		}
	],
	//End Be Verbs Questions
	//Start Action Verbs Questions
	"ActionVerbs":[
		"sachi Action Verbs name a physical or mental action",
		"sachi Cats <i>meow</i> loudly. (physical)",
		"sachi Students <i>learn</i> new material. (abstract)",
		"sachi Action Verbs can be transitive or intransitive. Transitive verbs <i>transfer</i> their action to a <b>direct object</b>. Intransitive verbs have nothing to transfer their action to.",
		"sachi Transitive: The actress <i>wiped</i> the <b>tears</b> from her eyes. (Wiped what? Wiped tears.)",
		"sachi Intransitive: The windshield wipers <i>wiped</i> across the windshield. (Wiped what? Nothing.)",
		"jump QuestionActionVerbsOne"
	],
	"QuestionActionVerbsOne":[
		"Now for question #1",
		"change QuestionActionVerbsTwo",
		{"Choice":
		 {"Dialog": "sachi Choose the action verb in the sentence: The mermaid swam away.",
		  "Incorrect":{
			  "Text":"Mermaid",
			  "Do":"jump Incorrect"
		  },
		  "Correct":{
			  "Text":"Swam",
			  "Do": "jump Correct"
		  },
		  "Incorrect1":{
			  "Text": "Away",
			  "Do": "jump Incorrect"
		  }
		 }
		}
	],
	"QuestionActionVerbsTwo":[
		"Now for question #2",
		"change QuestionActionVerbsThree",
		{"Choice":
		 {"Dialog": "sachi Choose the action verb in the sentence: She pushed the yellow button.",
		  "Incorrect":{
			  "Text":"Button",
			  "Do":"jump Incorrect"
		  },
		  "Correct":{
			  "Text":"Pushed",
			  "Do": "jump Correct"
		  },
		  "Incorrect1":{
			  "Text":"Yellow",
			  "Do":"jump Incorrect"
		  }
		 }
		}
	],
	"QuestionActionVerbsThree":[
		"Now for question #3",
		"change QuestionActionVerbsFour",
		{"Choice":
		 {"Dialog": "sachi Choose the action verb in the sentence: The wind blew the leaves.",
		  "Incorrect":{
			  "Text":"Leaves",
			  "Do":"jump Incorrect"
		  },
		  "Incorrect1":{
			  "Text":"Wind",
			  "Do":"jump Incorrect"
		  },
		  "Correct":{
			  "Text":"Blew",
			  "Do": "jump Correct"
		  }
		 }
		}
	],
	"QuestionActionVerbsFour":[
		"Now for question #4",
		"change Complete",
		{"Choice":
		 {"Dialog": "sachi Choose the action verb in the sentence: Henry holds a purple crayon.",
		  "Correct":{
			  "Text":"Holds",
			  "Do":"jump Correct"
		  },
		  "Incorrect":{
			  "Text":"Crayon",
			  "Do": "jump Incorrect"
		  },
		  "Incorrect1":{
			  "Text":"A",
			  "Do": "jump Incorrect"
		  }
		 }
		}
	],
	//End Action Verbs Questions
	//Start Adjectives Questions
	"Adjectives":[
		"sachi An adjective is a word which modifies a noun or pronoun.",
		"sachi He's got a <i>beautiful</i> car.",
		"sachi <i>Beautiful</i> is an adjective modifying <b>car</b>.",
		"sachi Adjectives may come <i>before</i>  a <b>noun</b>.",
		"sachi He found a <i>nice</i> <b>job</b>.",
		"sachi Adjectives may also come after certain <b>verbs</b> like <b>be</b>, <b>feel</b>, <b>seem</b>, <b>look</b>.",
		"sachi He <b>is</b> <i>intelligent</i>. I <b>feel</b> <i>happy</i>. She <b>seems</b> <i>unhappy</i>. They <b>look</b> <i>fantastic</i>.",
		"jump QuestionAdjectivesOne"
	],
	"QuestionAdjectivesOne":[
		"Now for question #1",
		"change QuestionAdjectivesTwo",
		{"Choice":
		 {"Dialog": "sachi Choose the adjective in the sentence: Playing on the computer is a favorite pastime of mine.",
		  "Incorrect":{
			  "Text":"Playing",
			  "Do":"jump Incorrect"
		  },
		  "Correct":{
			  "Text":"Favorite",
			  "Do": "jump Correct"
		  }
		 }
		}
	],
	"QuestionAdjectivesTwo":[
		"Now for question #2",
		"change QuestionAdjectivesThree",
		{"Choice":
		 {"Dialog": "sachi Choose the adjective in the sentence: She pushed the yellow button.",
		  "Incorrect":{
			  "Text":"Button",
			  "Do":"jump Incorrect"
		  },
		  "Correct":{
			  "Text":"Yellow",
			  "Do": "jump Correct"
		  }
		 }
		}
	],
	"QuestionAdjectivesThree":[
		"Now for question #3",
		"change QuestionAdjectivesFour",
		{"Choice":
		 {"Dialog": "sachi Choose the adjective in the sentence: The little girl I was telling you about is sitting over there.",
		  "Incorrect":{
			  "Text":"Over",
			  "Do":"jump Incorrect"
		  },
		  "Correct":{
			  "Text":"Little",
			  "Do": "jump Correct"
		  }
		 }
		}
	],
	"QuestionAdjectivesFour":[
		"Now for question #4",
		"change Complete",
		{"Choice":
		 {"Dialog": "sachi Choose the adjective in the sentence: I enjoy listening to loud music.",
		  "Correct":{
			  "Text":"Loud",
			  "Do":"jump Correct"
		  },
		  "Incorrect":{
			  "Text":"Enjoy",
			  "Do": "jump Incorrect"
		  }
		 }
		}
	],
	"Incorrect":[
		"show "+character+" Normal right",
		"Incorrect",
		"jump"
	],
	"Correct":[
		"add_score",
		"show "+character+" Happy right",
		"Correct!",
		"jump"
	],
	// End Adjectives Questions
	// Start Henrik's Supermarket
	"Start1":[
		"scene supermarket",
		"show henrik Normal center with fadeIn",
		"notify Welcome",
		"henrik Hi {{player.Name}} Welcome to Basic English Tutoring Aid!",
		"show henrik Normal right",
		{"Choice": {
			"Dialog": "Henrik Which lesson are we going to study today?",
			"CSAdjectives": {
				"Text": "Comparative and Superlative Adjectives",
				"Do": "jump CSAdjectives"
			},
			"Adverbs": {
				"Text": "Adverbs",
				"Do": "jump Adverbs"
			},
			"SimpleTense": {
				"Text": "Simple Tense",
				"Do": "jump SimpleTense"
			},
			"ProgPerfTense": {
				"Text": "Progressive and Perfect Tense",
				"Do": "jump ProgPerfTense"
			},
			"PerfProgTense":{
				"Text": "Perfect Progressive Tense",
				"Do": "jump PerfProgTense"
			}
		}
		}
	],
	"CSAdjectives":[
		"henrik We use comparatives to compare two things or two people.",
		"henrik Example: She is <i>taller</i> than her husband.",
		"henrik Superlatives are used to compare or show the difference between more than two things or more than two people.",
		"henrik To form comparatives or superlatives you need to know the number of syllables in the adjectives.",
		"henrik For one-syllable adjectives ending in a silent 'e' (e.g. <b>nice</b>), you need to add an <i>'r'</i> to form its comparative and <i>'st'</i> to form its superlative. So <b>nice</b> becomes <b>nicer</b> and <b>nicest</b> respectively.",
		"henrik For one-syllable adjectives ending in one vowel and one consonant (e.g. <b>big</b>), the consonant is doubled and <i>'er'</i> is added to form its comparative and the consonant is double and <i>'est'</i> is added to form its superlative. So <b>big</b> becomes <b>bigger</b> and <b>biggest</b> respectively.",
		"henrik For one-syllable adjectives ending in more than one consonant or more than a vowel, <i>'er'</i> is added to form the comparative and <i>'est'</i> is added to form the superlative.",
		"henrik Example: <b>high</b> - <b>higher</b> (comparative) - <b>highest</b> (superlative)",
		"henrik Example: <b>cheap</b> - <b>cheaper</b> (comparative) - <b>cheapest</b>(superlative)",
		"henrik For two-syllable adjectives ending in 'y' (e.g. <b>happy</b>), the 'y' becomes 'i' and <i>'er'</i> is added to form the comparative and <i>'est'</i> is added to form the superlative. So <b>happy</b> becomes <b>happier</b> (comparative) and <b>happiest</b> (superlative).",
		"henrik For adjectives with two-syllable or more without 'y' at the end (e.g exciting), the format <b>'more + adjective'</b> is followed to form the comparative and <b>'most + adjective'</b> to form the superlative. So <b>exciting</b> becomes <b>more exciting</b> (comparative) and <b>most exciting</b> (superlative).",
		"henrik Now let's see what you've learned!",
		"jump Q1CSAdjectives"
	],
	"Q1CSAdjectives":[
		"Now for Question #1",
		"change Q2CSAdjectives",
		{
			"Choice":{
				"Dialog": "henrik Choose the correct form of the adjectives in the parenthesis: The (hot) _____ desert of all is the Sahara and it's in Africa.",
				"Incorrect":{
					"Text": "Hot",
					"Do": "jump Incorrect1"
				},
				"Incorrect":{
					"Text": "Hotter",
					"Do": "jump Incorrect1"
				},
				"Correct":{
					"Text": "Hottest",
					"Do": "jump Correct1"
				}
			}
		}
	],
	"Q2CSAdjectives":[
		"Now for Question #2",
		"change Q3CSAdjectives",
		{
			"Choice":{
				"Dialog": "henrik Choose the correct form of the adjectives in the parenthesis: My brother's room is (tidy) _____ than mine.",
				"Incorrect":{
					"Text": "Tidy",
					"Do": "jump Incorrect"
				},
				"Correct":{
					"Text": "Tidier",
					"Do": "jump Correct"
				},
				"Incorrect":{
					"Text": "Tidiest",
					"Do": "jump Incorrect"
				}
			}
		}
	],
	"Q3CSAdjectives":[
		"Now for Question #3",
		"change Q4CSAdjectives",
		{
			"Choice":{
				"Dialog": "henrik Choose the correct form of the adjectives in the parenthesis: He is the (nice) _____ person I've ever met.",
				"Incorrect":{
					"Text": "Nice",
					"Do": "jump Incorrect"
				},
				"Incorrect1":{
					"Text": "Nicer",
					"Do": "jump Incorrect"
				},
				"Correct":{
					"Text": "Nicest",
					"Do": "jump Correct"
				}
			}
		}
	],
	"Q4CSAdjectives":[
		"Now for Question #4",
		"change Complete",
		{
			"Choice":{
				"Dialog": "henrik Choose the correct form of the adjectives in the parenthesis: I think Chinese is (difficult) _____ to learn than English.",
				"Incorrect":{
					"Text": "Difficult",
					"Do": "jump Incorrect"
				},
				"Correct":{
					"Text": "More difficult",
					"Do": "jump Correct"
				},
				"Incorrect":{
					"Text": "Most difficult",
					"Do": "jump Incorrect"
				}
			}
		}
	],
}