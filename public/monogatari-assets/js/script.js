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
	"bg-music": "audio.m4a"
}

// Define the voice files used in the game.
var voice = {
	"sachi_welcome":"Sachi/Sachi_Welcome.mp3",
	"sachi_lesson": "Sachi/Sachi_Lesson.mp3",
	"sachi_q1":"Sachi/Q1.mp3",
	"sachi_q2":"Sachi/Q2.mp3",
	"sachi_q3":"Sachi/Q3.mp3",
	"sachi_q4":"Sachi/Q4.mp3",
	"sachi_correct": "Sachi/Correct.mp3",
	"sachi_incorrect": "Sachi/Incorrect.mp3",
	"sachi_congrats":"Sachi/Sachi_Congratulations.mp3",
	"sachi_ready":"Sachi/Sachi_Ready.mp3",
	"sachi_possessive1":"Sachi/Possessive/Possessive1.mp3",
	"sachi_possessive2":"Sachi/Possessive/Possessive2.mp3",
	"sachi_possessive3":"Sachi/Possessive/Possessive3.mp3",
	"sachi_which":"Sachi/Possessive/Which_of_the_following_is_correct.mp3",
	"sachi_pronouns1":"Sachi/Pronouns/Pronouns1.mp3",
	"sachi_pronouns2":"Sachi/Pronouns/Pronouns2.mp3",
	"sachi_pronouns3":"Sachi/Pronouns/Pronouns3.mp3",
	"sachi_pronouns4":"Sachi/Pronouns/Pronouns4.mp3",
	"sachi_qpronouns1":"Sachi/Pronouns/Q1Pronouns.mp3",
	"sachi_qpronouns2":"Sachi/Pronouns/Q2Pronouns.mp3",
	"sachi_qpronouns3":"Sachi/Pronouns/Q3Pronouns.mp3",
	"sachi_qpronouns4":"Sachi/Pronouns/Q4Pronouns.mp3",
	"sachi_beverbs1":"Sachi/Be-Verbs/BeVerbs1.mp3",
	"sachi_beverbs2":"Sachi/Be-Verbs/BeVerbs2.mp3",
	"sachi_beverbs3":"Sachi/Be-Verbs/BeVerbs3.mp3",
	"sachi_beverbs4":"Sachi/Be-Verbs/BeVerbs4.mp3",
	"sachi_beverbs5":"Sachi/Be-Verbs/BeVerbs5.mp3",
	"sachi_q1beverbs":"Sachi/Be-Verbs/Q1BeVerbs.mp3",
	"sachi_q2beverbs":"Sachi/Be-Verbs/Q2BeVerbs.mp3",
	"sachi_q3beverbs":"Sachi/Be-Verbs/Q3BeVerbs.mp3",
	"sachi_q4beverbs":"Sachi/Be-Verbs/Q4BeVerbs.mp3",
	"sachi_adjectives1" :"Sachi/Adjectives/Adjectives1.mp3",
	"sachi_adjectives2":"Sachi/Adjectives/Adjectives2.mp3",
	"sachi_adjectives3":"Sachi/Adjectives/Adjectives3.mp3",
	"sachi_adjectives4":"Sachi/Adjectives/Adjectives4.mp3",
	"sachi_adjectives5":"Sachi/Adjectives/Adjectives5.mp3",
	"sachi_adjectives6":"Sachi/Adjectives/Adjectives6.mp3",
	"sachi_adjectives7":"Sachi/Adjectives/Adjectives7.mp3",
	"sachi_q1adjectives":"Sachi/Adjectives/Q1Adjectives.mp3",
	"sachi_q2adjectives":"Sachi/Adjectives/Q2Adjectives.mp3",
	"sachi_q3adjectives":"Sachi/Adjectives/Q3Adjectives.mp3",
	"sachi_q4adjectives":"Sachi/Adjectives/Q4Adjectives.mp3",
	"sachi_averbs1":"Sachi/Action-Verbs/Action-Verbs1.mp3",
	"sachi_averbs2":"Sachi/Action-Verbs/Action-Verbs2.mp3",
	"sachi_averbs3":"Sachi/Action-Verbs/Action-Verbs3.mp3",
	"sachi_averbs4":"Sachi/Action-Verbs/Action-Verbs4.mp3",
	"sachi_averbs5":"Sachi/Action-Verbs/Action-Verbs5.mp3",
	"sachi_averbs6":"Sachi/Action-Verbs/Action-Verbs6.mp3",
	"sachi_q1averbs":"Sachi/Action-Verbs/Q1ActionVerbs.mp3",
	"sachi_q2averbs":"Sachi/Action-Verbs/Q2ActionVerbs.mp3",
	"sachi_q3averbs":"Sachi/Action-Verbs/Q3ActionVerbs.mp3",
	"sachi_q4averbs":"Sachi/Action-Verbs/Q4ActionVerbs.mp3",
	
	"henrik_welcome":"Henrik/Henrik_Welcome.mp3",
	"henrik_lesson": "Henrik/Henrik_Lesson.mp3",
	"henrik_q1":"Henrik/Q1.mp3",
	"henrik_q2":"Henrik/Q2.mp3",
	"henrik_q3":"Henrik/Q3.mp3",
	"henrik_q4":"Henrik/Q4.mp3",
	"henrik_correct": "Henrik/Correct.mp3",
	"henrik_incorrect": "Henrik/Incorrect.mp3",
	"henrik_congrats":"Henrik/Henrik_Congratulations.mp3",
	"henrik_ready":"Henrik/Henrik_Ready.mp3",
	"henrik_stense1":"Henrik/SimpleTense/SimpleTense1.mp3",
	"henrik_stense2":"Henrik/SimpleTense/SimpleTense2.mp3",
	"henrik_stense3":"Henrik/SimpleTense/SimpleTense3.mp3",
	"henrik_stense4":"Henrik/SimpleTense/SimpleTense4.mp3",
	"henrik_stense5":"Henrik/SimpleTense/SimpleTense5.mp3",
	"henrik_q1stense":"Henrik/SimpleTense/Q1SimpleTense.mp3",
	"henrik_q2stense":"Henrik/SimpleTense/Q2SimpleTense.mp3",
	"henrik_q3stense":"Henrik/SimpleTense/Q3SimpleTense.mp3",
	"henrik_q4stense":"Henrik/SimpleTense/Q4SimpleTense.mp3",
	"henrik_pptense1":"Henrik/PresProgTense/PresProgTense1.mp3",
	"henrik_pptense2":"Henrik/PresProgTense/PresProgTense2.mp3",
	"henrik_pptense3":"Henrik/PresProgTense/PresProgTense3.mp3",
	"henrik_pptense4":"Henrik/PresProgTense/PresProgTense4.mp3",
	"henrik_pptense5":"Henrik/PresProgTense/PresProgTense4.mp3",
	"henrik_pptense6":"Henrik/PresProgTense/PresProgTense4.mp3",
	"henrik_q1pptense1":"Henrik/PresProgTense/Q1PresProgTense.mp3",
	"henrik_q2pptense2":"Henrik/PresProgTense/Q2PresProgTense.mp3",
	"henrik_q3pptense3":"Henrik/PresProgTense/Q3PresProgTense.mp3",
	"henrik_q4pptense4":"Henrik/PresProgTense/Q4PresProgTense.mp3",
	"henrik_adverbs1":"Henrik/Adverbs/Adverbs1.mp3",
	"henrik_adverbs2":"Henrik/Adverbs/Adverbs2.mp3",
	"henrik_adverbs3":"Henrik/Adverbs/Adverbs3.mp3",
	"henrik_adverbs4":"Henrik/Adverbs/Adverbs4.mp3",
	"henrik_adverbs5":"Henrik/Adverbs/Adverbs5.mp3",
	"henrik_adverbs6":"Henrik/Adverbs/Adverbs6.mp3",
	"henrik_q1adverbs":"Henrik/Adverbs/Q1Adverbs.mp3",
	"henrik_q2adverbs":"Henrik/Adverbs/Q2Adverbs.mp3",
	"henrik_q3adverbs":"Henrik/Adverbs/Q3Adverbs.mp3",
	"henrik_q4adverbs":"Henrik/Adverbs/Q4Adverbs.mp3",
	"henrik_csadjectives1" :"Henrik/CSAdjectives/CSAdjectives1.mp3",
	"henrik_csadjectives2":"Henrik/CSAdjectives/CSAdjectives2.mp3",
	"henrik_csadjectives3":"Henrik/CSAdjectives/CSAdjectives3.mp3",
	"henrik_csadjectives4":"Henrik/CSAdjectives/CSAdjectives4.mp3",
	"henrik_csadjectives5":"Henrik/CSAdjectives/CSAdjectives5.mp3",
	"henrik_csadjectives6":"Henrik/CSAdjectives/CSAdjectives6.mp3",
	"henrik_csadjectives7":"Henrik/CSAdjectives/CSAdjectives7.mp3",
	"henrik_csadjectives8":"Henrik/CSAdjectives/CSAdjectives8.mp3",
	"henrik_csadjectives9":"Henrik/CSAdjectives/CSAdjectives9.mp3",
	"henrik_csadjectives10":"Henrik/CSAdjectives/CSAdjectives10.mp3",
	"henrik_csadjectives11":"Henrik/CSAdjectives/CSAdjectives11.mp3",
	"henrik_q1csadjectives":"Henrik/CSAdjectives/Q1CSAdjectives.mp3",
	"henrik_q2csadjectives":"Henrik/CSAdjectives/Q2CSAdjectives.mp3",
	"henrik_q3csadjectives":"Henrik/CSAdjectives/Q3CSAdjectives.mp3",
	"henrik_q4csadjectives":"Henrik/CSAdjectives/Q4CSAdjectives.mp3",
	"henrik_ppptense1":"Henrik/PresPerfProgTense/PresPerfProgTense1.mp3",
	"henrik_ppptense2":"Henrik/PresPerfProgTense/PresPerfProgTense2.mp3",
	"henrik_ppptense3":"Henrik/PresPerfProgTense/PresPerfProgTense3.mp3",
	"henrik_ppptense4":"Henrik/PresPerfProgTense/PresPerfProgTense4.mp3",
	"henrik_ppptense5":"Henrik/PresPerfProgTense/PresPerfProgTense5.mp3",
	"henrik_ppptense6":"Henrik/PresPerfProgTense/PresPerfProgTense6.mp3",
	"henrik_ppptense7":"Henrik/PresPerfProgTense/PresPerfProgTense7.mp3",
	"henrik_ppptense8":"Henrik/PresPerfProgTense/PresPerfProgTense8.mp3",
	"henrik_ppptense9":"Henrik/PresPerfProgTense/PresPerfProgTense9.mp3",
	"henrik_q1ppptense":"Henrik/PresPerfProgTense/Q1PresPerfProgTense.mp3",
	"henrik_q2ppptense":"Henrik/PresPerfProgTense/Q2PresPerfProgTense.mp3",
	"henrik_q3ppptense":"Henrik/PresPerfProgTense/Q3PresPerfProgTense.mp3",
	"henrik_q4ppptense":"Henrik/PresPerfProgTense/Q4PresPerfProgTense.mp3",
	
}

// Define the sounds used in the game.
var sound = {
	"correct": "sectionpass.mp3",
	"incorrect": "sectionfail.mp3"
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
		"play music bg-music loop",
		"scene classroom",
		"show sachi Happy center with fadeIn",
		"notify Welcome",
		"play voice sachi_welcome",
		"sachi Hi {{player.Name}} Welcome to Basic English Tutoring Aid!",
		"show sachi Normal right",
		"play voice sachi_lesson",
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
		"play voice sachi_possessive1",
		"sachi Possessive nouns are used to indicate ownership ",
		"play voice sachi_possessive2",
		"sachi Possessive nouns usually are formed by adding an apostrophe (') and s.",
		"play voice sachi_possessive3",
		"sachi Examples: John's Book, Kerry's Car, Grandma's Mirror",
		"play voice sachi_ready",
		{
			"Choice":{
				"Dialog":"sachi Are you ready?",
				"QuestionPossessiveOne":{
					"Text":"Yes",
					"Do":"jump QuestionPossessiveOne"
				},
				"Possessive":{
					"Text":"No",
					"Do":"jump Possessive"
				}

			}
		}
	],
	"QuestionPossessiveOne":[
		"play voice sachi_q1",
		"Now for question #1",
		"play voice sachi_which",
		"change QuestionPossessiveTwo",

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
		"play voice sachi_q2",
		"Now for question #2",
		"play voice sachi_which",
		"change QuestionPossessiveThree",

		{"Choice":{
			"Dialog":"sachi Which of the following is correct?",
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
		"play voice sachi_q3",
		"Now for question #3",
		"play voice sachi_which",
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
		"play voice sachi_q4",
		"Now for question #4",
		"play voice sachi_which",
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
		charVoice,
		"Congratulations for finishing this topic. I hope you learn something",
		"jump " + engine.Label
	]
	,
	//End Possessive Nouns Questions
	//Start Pronouns Questions
	"Pronouns": [
		"play voice sachi_pronouns1",
		"sachi Pronouns takes the place of a noun. ",
		"play voice sachi_pronouns2",
		"sachi Here are some examples of Pronouns: He, She, It, They, I, You, etc.",
		"play voice sachi_pronouns3",
		"sachi Example: Mary is one of the heads of the ToJi Corporation. Becomes: She is one of the heads of the ToJi Corporation.",
		"play voice sachi_pronouns4",
		"Mary, Mr. James, and Tom researched and invented a drug for cancer treatment. Becomes: They researched and invented a drug for cancer treatment.",
		"play voice sachi_ready",
		{
			"Choice":{
				"Dialog":"sachi Are you ready?",
				"QuestionPronounsOne":{
					"Text":"Yes",
					"Do":"jump QuestionPronounsOne"
				},
				"Pronouns":{
					"Text":"No",
					"Do":"jump Pronouns"
				}

			}
		}
	],
	"QuestionPronounsOne":[
		"play voice sachi_q1",
		"Now for question #1",
		"change QuestionPronounsTwo",
		"play voice sachi_qpronouns1",
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
	,
	"QuestionPronounsTwo":[
		"play voice sachi_q2",
		"Now for question #2",
		"change QuestionPronounsThree",
		"play voice sachi_qpronouns2",
		{
			"Choice":{
				"Dialog": "sachi What is the pronoun in the sentence: Jesse is a fan of soccer. He even went to a game once.",
				"Correct":{
					"Text": "He",
					"Do": "jump Correct"
				},
				"Incorrect":{
					"Text": "We",
					"Do": "jump Incorrect"
				}
			}
		}
	]
	,
	"QuestionPronounsThree":[
		"play voice sachi_q3",
		"Now for question #3",
		"change QuestionPronounsFour",
		"play voice sachi_qpronouns3",
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
		"play voice sachi_q4",
		"Now for question #4",
		"change Complete",
		"play voice sachi_qpronouns4",
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
		"play voice sachi_beverbs1",
		"sachi 'Be' Verbs show action or a state of being",
		"play voice sachi_beverbs2",
		"sachi Sarah <i>goes</i> to school. School is her place to rest. She <i>likes</i> her friends at school. She <i>feels</i> relaxed. At school, she <i>learns</i> new things.",
		"play voice sachi_beverbs3",
		"sachi 'Be' Verbs must match the subject. Examples: I <i>am</i> alone. They <i>are</i> walking together.",
		"play voice sachi_beverbs4",
		"sachi 'Be' Verbs are follwed by a 'not' to form a negative sentence. Examples: I <i>am not</i> alone. They <i>are not</i> walking together.",
		"play voice sachi_beverbs4",
		"sachi 'Be' Verbs are the first word in questions. Examples: <i>Am</i> I alone? <i>Are</i> they walking together?",
		"play voice sachi_ready",
		{
			"Choice":{
				"Dialog":"sachi Are you ready?",

				"QuestionBeVerbsOne":{
					"Text":"Yes",
					"Do":"jump QuestionBeVerbsOne"
				},
				"BeVerbs":{
					"Text":"No",
					"Do":"jump BeVerbs"
				}
			}
		}
	],
	"QuestionBeVerbsOne":[
		"play voice sachi_q1",
		"Now for question #1",
		"change QuestionBeVerbsTwo",
		"play voice sachi_q1beverbs",
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
		"play voice sachi_q2",
		"Now for question #2",
		"change QuestionBeVerbsThree",
		"play voice sachi_q2beverbs",
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
		"play voice sachi_q3",
		"Now for question #3",
		"change QuestionBeVerbsFour",
		"play voice sachi_q3beverbs",
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
		"play voice sachi_q4",
		"Now for question #4",
		"change Complete",
		"play voice sachi_q4beverbs",
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
		"play voice sachi_averbs1",
		"sachi Action Verbs name a physical or mental action",
		"play voice sachi_averbs2",
		"sachi Cats <i>meow</i> loudly. (physical)",
		"play voice sachi_averbs3",
		"sachi Students <i>learn</i> new material. (abstract)",
		"play voice sachi_averbs4",
		"sachi Action Verbs can be transitive or intransitive. Transitive verbs <i>transfer</i> their action to a <b>direct object</b>. Intransitive verbs have nothing to transfer their action to.",
		"play voice sachi_averbs5",
		"sachi Transitive: The actress <i>wiped</i> the <b>tears</b> from her eyes. (Wiped what? Wiped tears.)",
		"play voice sachi_averbs6",
		"sachi Intransitive: The windshield wipers <i>wiped</i> across the windshield. (Wiped what? Nothing.)",
		"play voice sachi_ready",
		{
			"Choice":{
				"Dialog":"sachi Are you ready?",
				"QuestionPronounsOne":{
					"Text":"Yes",
					"Do":"jump QuestionActionVerbsOne"
				},
				"ActionVerbs":{
					"Text":"No",
					"Do":"jump ActionVerbs"
				}

			}
		}
	],
	"QuestionActionVerbsOne":[
		"play voice sachi_q1",
		"Now for question #1",
		"change QuestionActionVerbsTwo",
		"play voice sachi_q1averbs",
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
		"play voice sachi_q2",
		"Now for question #2",
		"change QuestionActionVerbsThree",
		"play voice sachi_q2averbs",
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
		"play voice sachi_q3",
		"Now for question #3",
		"change QuestionActionVerbsFour",
		"play voice sachi_q3averbs",
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
		"play voice sachi_q4",
		"Now for question #4",
		"change Complete",
		"play voice sachi_q4averbs",
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
		"play voice sachi_adjectives1",
		"sachi An adjective is a word which modifies a noun or pronoun.",
		"play voice sachi_adjectives2",
		"sachi He's got a <i>beautiful</i> car.",
		"play voice sachi_adjectives3",
		"sachi <i>Beautiful</i> is an adjective modifying <b>car</b>.",
		"play voice sachi_adjectives3",
		"sachi Adjectives may come <i>before</i>  a <b>noun</b>.",
		"play voice sachi_adjectives4",
		"sachi He found a <i>nice</i> <b>job</b>.",
		"play voice sachi_adjectives5",
		"sachi Adjectives may also come after certain <b>verbs</b> like <b>be</b>, <b>feel</b>, <b>seem</b>, <b>look</b>.",
		"play voice sachi_adjectives6",
		"sachi He <b>is</b> <i>intelligent</i>. I <b>feel</b> <i>happy</i>. She <b>seems</b> <i>unhappy</i>. They <b>look</b> <i>fantastic</i>.",
		"play voice sachi_ready",
		{
			"Choice":{
				"Dialog":"sachi Are you ready?",
				"QuestionAdjectivesOne":{
					"Text":"Yes",
					"Do":"jump QuestionAdjectivesOne"
				},
				"Adjectives":{
					"Text":"No",
					"Do":"jump Adjectives"
				}

			}
		}

	],
	"QuestionAdjectivesOne":[
		"play voice sachi_q1",
		"Now for question #1",
		"change QuestionAdjectivesTwo",
		"play voice sachi_q1adjectives",
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
		"play voice sachi_q2",
		"Now for question #2",
		"change QuestionAdjectivesThree",
		"play voice sachi_q2adjectives",
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
		"play voice sachi_q3",
		"Now for question #3",
		"change QuestionAdjectivesFour",
		"play voice sachi_q3adjectives",
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
		"play voice sachi_q4",
		"Now for question #4",
		"change Complete",
		"play voice sachi_q4adjectives",
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
		"play sound incorrect",
		"Incorrect",
		"jump"
	],
	"Correct":[
		"add_score",
		"show "+character+" Happy right",
		"play sound correct",
		"Correct!",
		"jump"
	],
	// End Adjectives Questions
	// Start Henrik's Supermarket
	"Start1":[
		"play music bg-music loop",
		"scene supermarket",
		"show henrik Normal center with fadeIn",
		"notify Welcome",
		"play voice henrik_welcome",
		"henrik Hi {{player.Name}} Welcome to Basic English Tutoring Aid!",
		"show henrik Normal right",
		"play voice henrik_lesson",
		{
			"Choice": {
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
				"PresProgTense": {
					"Text": "Present Progressive Tense",
					"Do": "jump PresProgTense"
				},
				"PresPerfProgTense":{
					"Text": "Perfect Progressive Tense",
					"Do": "jump PresPerfProgTense"
				}
			}
		}
	],
	"CSAdjectives":[
		"play voice henrik_csadjectives1",
		"henrik We use comparative adjectives to compare two things or two people.",
		"play voice henrik_csadjectives2",
		"henrik Example: She is <i>taller</i> than her husband.",
		"play voice henrik_csadjectives3",
		"henrik Superlative adjectives are used to compare or show the difference between more than two things or more than two people.",
		"play voice henrik_csadjectives4",
		"henrik To form comparative or superlative adjectives you need to know the number of syllables in the adjectives.",
		"play voice henrik_csadjectives5",
		"henrik For one-syllable adjectives ending in a silent 'e' (e.g. <b>nice</b>), you need to add an <i>'r'</i> to form its comparative and <i>'st'</i> to form its superlative. So <b>nice</b> becomes <b>nicer</b> and <b>nicest</b> respectively.",
		"play voice henrik_csadjectives6",
		"henrik For one-syllable adjectives ending in one vowel and one consonant (e.g. <b>big</b>), the consonant is doubled and <i>'er'</i> is added to form its comparative and the consonant is double and <i>'est'</i> is added to form its superlative. So <b>big</b> becomes <b>bigger</b> and <b>biggest</b> respectively.",
		"play voice henrik_csadjectives7",
		"henrik For one-syllable adjectives ending in more than one consonant or more than a vowel, <i>'er'</i> is added to form the comparative and <i>'est'</i> is added to form the superlative.",
		"play voice henrik_csadjectives8",
		"henrik Example: <b>high</b> - <b>higher</b> (comparative) - <b>highest</b> (superlative)",
		"play voice henrik_csadjectives9",
		"henrik Example: <b>cheap</b> - <b>cheaper</b> (comparative) - <b>cheapest</b>(superlative)",
		"play voice henrik_csadjectives10",
		"henrik For two-syllable adjectives ending in 'y' (e.g. <b>happy</b>), the 'y' becomes 'i' and <i>'er'</i> is added to form the comparative and <i>'est'</i> is added to form the superlative. So <b>happy</b> becomes <b>happier</b> (comparative) and <b>happiest</b> (superlative).",
		"play voice henrik_csadjectives11",
		"henrik For adjectives with two-syllable or more without 'y' at the end (e.g exciting), the format <b>'more + adjective'</b> is followed to form the comparative and <b>'most + adjective'</b> to form the superlative. So <b>exciting</b> becomes <b>more exciting</b> (comparative) and <b>most exciting</b> (superlative).",
		"play voice henrik_ready",
		{
			"Choice":{
				"Dialog":"henrik Are you ready?",
				"Q1CSAdjectives":{
					"Text":"Yes",
					"Do":"jump Q1CSAdjectives"
				},
				"CSAdjectives":{
					"Text":"No",
					"Do":"jump CSAdjectives"
				}

			}
		}
	],
	"Q1CSAdjectives":[
		"play voice henrik_q1",
		"Now for Question #1",
		"change Q2CSAdjectives",
		"play voice henrik_q1csadjectives",
		{
			"Choice":{
				"Dialog": "henrik Choose the correct form of the adjectives in the parenthesis: The (hot) _____ desert of all is the Sahara and it's in Africa.",
				"Incorrect":{
					"Text": "Hot",
					"Do": "jump Incorrect"
				},
				"Incorrect1":{
					"Text": "Hotter",
					"Do": "jump Incorrect"
				},
				"Correct":{
					"Text": "Hottest",
					"Do": "jump Correct"
				}
			}
		}
	],
	"Q2CSAdjectives":[
		"play voice henrik_q2",
		"Now for Question #2",
		"change Q3CSAdjectives",
		"play voice henrik_q2csadjectives",
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
				"Incorrect1":{
					"Text": "Tidiest",
					"Do": "jump Incorrect"
				}
			}
		}
	],
	"Q3CSAdjectives":[
		"play voice henrik_q3",
		"Now for Question #3",
		"change Q4CSAdjectives",
		"play voice henrik_q3csadjectives",
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
		"play voice henrik_q4",
		"Now for Question #4",
		"change Complete",
		"play voice henrik_q4csadjectives",
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
				"Incorrect1":{
					"Text": "Most difficult",
					"Do": "jump Incorrect"
				}
			}
		}
	],
	"Adverbs":[
		"play voice henrik_adverbs1",
		"henrik An <b>adverb</b> is an article of speech that modifies adverbs, verbs, adjectives, clauses, or sentences.",
		"play voice henrik_adverbs2",
		"henrik When an adverb is used in a sentence, it will answer one of the following questions: <i>how?</i>, <i>when?</i>, <i>what?</i>, <i>why?</i>, <i>in what way?</i>, <i>how often?</i>, <i>how much?</i>, <i>in what condition?</i>, and <i>to what degree?</i>",
		"play voice henrik_adverbs3",
		"henrik Adverbs can often be recognized by their <i><b>-ly</b></i> endings.",
		"play voice henrik_adverbs4",
		"henrik For example: She walked <i>calmly</i> towards me. Calmly is an adverb used to modify the word <i>walked</i>, and answering the question: <i>in what way?</i>",
		"play voice henrik_adverbs5",
		"henrik However, there are also many adverbs that <b>do not</b> require an <i>-ly</i> ending.",
		"play voice henrik_adverbs6",
		"henrik For example: I went to the store today. The word '<i>today</i>' is an adverb which modifies the word <i>went</i>, and answers the question: <i>when?</i>",
		"play voice henrik_ready",
		{
			"Choice":{
				"Dialog":"henrik Are you ready?",
				"Q1Adverbs":{
					"Text":"Yes",
					"Do":"jump Q1Adverbs"
				},
				"Adverbs":{
					"Text":"No",
					"Do":"jump Adverbs"
				}

			}
		}
	],
	"Q1Adverbs":[
		"play voice henrik_q1",
		"Now for Question #1",
		"change Q2Adverbs",
		"play voice henrik_q1adverbs",
		{
			"Choice":{
				"Dialog": "What does the adverb <b>extremely</b> modify: My grandfather walks extremely slowly.",
				"Incorrect":{
					"Text": "Walks",
					"Do": "jump Incorrect"
				},
				"Correct":{
					"Text": "Slowly",
					"Do": "jump Correct"
				},
				"Incorrect1":{
					"Text": "Grandfather",
					"Do": "jump Incorrect"
				}
			}
		}
	],
	"Q2Adverbs":[
		"play voice henrik_q2",
		"Now for Question #2",
		"change Q3Adverbs",
		"play voice henrik_q2adverbs",
		{
			"Choice":{
				"Dialog": "What does the adverb <b>quite</b> modify: Your roommate drives quite fast, doesn't he?",
				"Correct":{
					"Text": "Fast",
					"Do": "jump Correct"
				},
				"Incorrect":{
					"Text": "Drives",
					"Do": "jump Incorrect"
				},
				"Incorrect1":{
					"Text": "Roommate",
					"Do": "jump Incorrect"
				}
			}
		}
	],
	"Q3Adverbs":[
		"play voice henrik_q3",
		"Now for Question #3",
		"change Q4Adverbs",
		"play voice henrik_q3adverbs",
		{
			"Choice":{
				"Dialog": "What does the adverb <b>rarely</b> modify: We rarely go to the movies on the weekends.",
				"Correct":{
					"Text": "Go",
					"Do": "jump Correct"
				},
				"Incorrect":{
					"Text": "We",
					"Do": "jump Incorrect"
				},
				"Incorrect1":{
					"Text": "To",
					"Do": "jump Incorrect"
				}
			}
		}
	],
	"Q4Adverbs":[
		"play voice henrik_q4",
		"Now for Question #4",
		"change Complete",
		"play voice henrik_q4adverbs",
		{
			"Choice":{
				"Dialog": "What does the adverb <b>well</b> modify: My niece reads well for a five-year old.",
				"Incorrect":{
					"Text": "Niece",
					"Do": "jump Incorrect"
				},
				"Incorrect1":{
					"Text": "For",
					"Do": "jump Incorrect"
				},
				"Correct":{
					"Text": "Reads",
					"Do": "jump Correct"
				}
			}
		}
	],
	"SimpleTense":[
		"play voice henrik_stense1",
		"henrik The <i>simple tense</i> is used to: give your opinion, talk about schedules, talk about your daily habits, and give facts.",
		"play voice henrik_stense2",
		"henrik To give opinion: I <b>like</b> ice cream. I <b>don't like</b> spicy food.",
		"play voice henrik_stense3",
		"henrik To talk about schedules: The library <b>opens</b> at eight. It <b>doesn't open at 7.</b>",
		"play voice henrik_stense4",
		"henrik To talk about your daily habits: Sara <b>eats</b> a slice of cheese for breakfast every day. She <b>doesn't</b> eat cereal.",
		"play voice henrik_stense5",
		"henrik To give facts: The earth <b>circles</b> the sun. The moon <b>doesn't circle</b> the sun.",
		"play voice henrik_ready",
		{
			"Choice":{
				"Dialog":"henrik Are you ready?",
				"Q1STense":{
					"Text":"Yes",
					"Do":"jump Q1STense"
				},
				"SimpleTense":{
					"Text":"No",
					"Do":"jump SimpleTense"
				}

			}
		}
	],
	"Q1STense":[
		"play voice henrik_q1",
		"Now for Question #1",
		"change Q2STense",
		"play voice henrik_q1stense",
		{
			"Choice":{
				"Dialog": "Choose the word/s that best matches the sentence: The earth _____ around the sun.",
				"Incorrect":{
					"Text": "does turns",
					"Do": "jump Incorrect"
				},
				"Incorrect1":{
					"Text": "turn",
					"Do": "jump Incorrect"
				},
				"Correct":{
					"Text": "turns",
					"Do": "jump Correct"
				}
			}
		}
	],
	"Q2STense":[
		"play voice henrik_q2",
		"Now for Question #2",
		"change Q3STense",
		"play voice henrik_q2stense",
		{
			"Choice":{
				"Dialog": "Choose the word/s that best matches the sentence: A liar is someone who _____ the truth.",
				"Incorrect":{
					"Text": "does tells",
					"Do": "jump Incorrect"
				},
				"Correct":{
					"Text": "doesn't tell",
					"Do": "jump Correct"
				},
				"Incorrect1":{
					"Text": "tells",
					"Do": "jump Incorrect"
				}
			}
		}
	],
	"Q3STense":[
		"play voice henrik_q3",
		"Now for Question #3",
		"change Q4STense",
		"play voice henrik_q3stense",
		{
			"Choice":{
				"Dialog": "Choose the word/s that best matches the sentence: A novelist _____ novels.",
				"Correct":{
					"Text": "writes",
					"Do": "jump Correct"
				},
				"Incorrect":{
					"Text": "doesn't write",
					"Do": "jump Incorrect"
				},
				"Incorrect1":{
					"Text": "does writes",
					"Do": "jump Incorrect"
				}
			}
		}
	],
	"Q4STense":[
		"play voice henrik_q4",
		"Now for Question #4",
		"change Complete",
		"play voice henrik_q4stense",
		{
			"Choice":{
				"Dialog": "Choose the word/s that best matches the sentence: Vegetarians _____ meat.",
				"Incorrect":{
					"Text": "eats",
					"Do": "jump Incorrect"
				},
				"Incorrect":{
					"Text": "doesn't eat",
					"Do": "jump Incorrect"
				},
				"Correct":{
					"Text": "don't eat",
					"Do": "jump Correct"
				}
			}
		}
	],
	"PresProgTense":[
		"play voice henrik_pptense1",
		"henrik Also known as Present Continuous.",
		"play voice henrik_pptense2",
		"henrik Used to talk about actions happening at the time of speaking.",
		"play voice henrik_pptense3",
		"henrik Example #1: Where is Mark? He <b>is taking</b> a bath.",
		"play voice henrik_pptense4",
		"henrik Example #2: What <b>are you doing</b> right now? You are <b>learning</b> English.",
		"play voice henrik_pptense5",
		"henrik Can also be used when an action has started but hasn't finished yet.",
		"play voice henrik_pptense6",
		"henrik Example #3: I <b>am reading</b> a book; it's a nice book.",
		"play voice henrik_ready",
		{
			"Choice":{
				"Dialog":"henrik Are you ready?",
				"Q1PresProgTense":{
					"Text":"Yes",
					"Do":"jump Q1CSAdjectives"
				},
				"PresProgTense":{
					"Text":"No",
					"Do":"jump PresProgTense"
				}

			}
		}
	],
	"Q1PresProgTense":[
		"play voice henrik_q1",
		"Now for Question #1",
		"change Q2PresProgTense",
		"play voice henrik_q1pptense",
		{
			"Choice":{
				"Dialog": "Choose the word/s that best match the sentence: Sara _____ to the movies.",
				"Incorrect":{
					"Text": "going",
					"Do": "jump Incorrect"
				},
				"Correct":{
					"Text": "is correct",
					"Do": "jump Correct"
				},
				"Incorrect":{
					"Text": "are going",
					"Do": "jump Incorrect"
				}
			}
		}
	],
	"Q2PresProgTense":[
		"play voice henrik_q2",
		"Now for Question #2",
		"change Q3PresProgTense",
		"play voice henrik_q2pptense",
		{
			"Choice":{
				"Dialog": "Choose the word/s that best match the sentence: Listen to the birds. They _____.",
				"Incorrect":{
					"Text": "singing",
					"Do": "jump Incorrect"
				},
				"Incorrect":{
					"Text": "is singing",
					"Do": "jump Incorrect"
				},
				"Correct":{
					"Text": "are singing",
					"Do": "jump Correct"
				}
			}
		}
	],
	"Q3PresProgTense":[
		"play voice henrik_q3",
		"Now for Question #3",
		"change Q4PresProgTense",
		"play voice henrik_q3pptense",
		{
			"Choice":{
				"Dialog": "Choose the word/s that best match the sentence: I feel happy because I _____ a good time with you.",
				"Correct":{
					"Text": "am having",
					"Do": "jump Correct"
				},
				"Incorrect":{
					"Text": "is having",
					"Do": "jump Incorrect"
				},
				"Incorrect":{
					"Text": "are having",
					"Do": "jump Incorrect"
				}
			}
		}
	],
	"Q4PresProgTense":[
		"play voice henrik_q4",
		"Now for Question #4",
		"change Complete",
		"play voice henrik_q4pptense",
		{
			"Choice":{
				"Dialog": "Choose the word/s that best match the sentence: The backpack _____ very beautiful.",
				"Incorrect":{
					"Text": "be",
					"Do": "jump Incorrect"
				},
				"Correct":{
					"Text": "is",
					"Do": "jump Correct"
				},
				"Incorrect":{
					"Text": "are",
					"Do": "jump Incorrect"
				}
			}
		}
	],
	"PresPerfProgTense":[
		"play voice henrik_ppptense1",
		"henrik Also known as Present Perfect Continuous.",
		"play voice henrik_ppptense2",
		"henrik The Present Perfect Progressive expresses an action that recently stopped or is still going on or a finished action that influenced the present.",
		"play voice henrik_ppptense3",
		"henrik It puts emphasis on the duration or course of the action.",
		"play voice henrik_ppptense4",
		"henrik Action that recently stopped or is still going on.",
		"play voice henrik_ppptense5",
		"henrik Example #1: I <i>have been living</i> here since 2001.",
		"play voice henrik_ppptense6",
		"henrik Finished action that influenced the present.",
		"play voice henrik_ppptense7",
		"henrik Example #2: I <i>have been working</i> all afternoon.",
		"play voice henrik_ppptense8",
		"henrik Emphasis on the duration or course of an action.",
		"play voice henrik_ppptense9",
		"henrik Example #3: She <i>has been writing</i> for two hours.",
		"play voice henrik_ready",
		{
			"Choice":{
				"Dialog":"henrik Are you ready?",
				"Q1PresPerfProgTense":{
					"Text":"Yes",
					"Do":"jump Q1PresPerfProgTense"
				},
				"PresPerfProgTense":{
					"Text":"No",
					"Do":"jump PresPerfProgTense"
				}

			}
		}
	],
	"Q1PresPerfProgTense":[
		"play voice henrik_q1",
		"Now for Question #1",
		"change Q2PresPerfProgTense",
		"play voice henrik_q1ppptense",
		{
			"Choice":{
				"Dialog": "Choose the word/s that best match the sentence: Emma _____ for five years.",
				"Correct":{
					"Text": "has been learning",
					"Do": "jump Correct"
				},
				"Incorrect":{
					"Text": "have been learning",
					"Do": "jump Incorrect"
				}
			}
		}
	],
	"Q2PresPerfProgTense":[
		"play voice henrik_q2",
		"Now for Question #2",
		"change Q3PresPerfProgTense",
		"play voice henrik_q2ppptense",
		{
			"Choice":{
				"Dialog": "Choose the word/s that best match the sentence: Paul _____ to the radio all day.",
				"Correct":{
					"Text": "has been listening",
					"Do": "jump Correct"
				},
				"Incorrect":{
					"Text": "have been listening",
					"Do": "jump Incorrect"
				}
			}
		}
	],
	"Q3PresPerfProgTense":[
		"play voice henrik_q3",
		"Now for Question #3",
		"change Q4PresPerfProgTense",
		"play voice henrik_q3ppptense",
		{
			"Choice":{
				"Dialog": "Choose the word/s that best match the sentence: I _____ for Daniel for 20 minutes.",
				"Incorrect":{
					"Text": "has been waiting",
					"Do": "jump Incorrect"
				},
				"Correct":{
					"Text": "have been waiting",
					"Do": "jump Correct"
				}
			}
		}
	],
	"Q4PresPerfProgTense":[
		"play voice henrik_q4",
		"Now for Question #4",
		"change Complete",
		"play voice henrik_q4ppptense",
		{
			"Choice":{
				"Dialog": "Choose the word/s that best match the sentence: They _____ here since 2013.",
				"Incorrect":{
					"Text": "has been living",
					"Do": "jump Incorrect"
				},
				"Correct":{
					"Text": "have been living",
					"Do": "jump Correct"
				}
			}
		}
	]
}