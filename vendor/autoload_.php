<?php

namespace vendor;

class vendor_loader
{
	public static $vendor_dir = NULL;

	public static $loader = NULL;

	public static $vendor = [];

	public static $autoload_files = [];

	function __construct()
	{
	}

	public static function Class_Mapping()
	{
		self::$vendor = [
			"BotMan" => [
				"BotMan" => [
					"Cache" => [
						"_Items" => [
							"ArrayCache" => 'botman/botman/src/Cache/ArrayCache.php',
							"CodeIgniterCache" => 'botman/botman/src/Cache/CodeIgniterCache.php',
							"DoctrineCache" => 'botman/botman/src/Cache/DoctrineCache.php',
							"LaravelCache" => 'botman/botman/src/Cache/LaravelCache.php',
							"Psr6Cache" => 'botman/botman/src/Cache/Psr6Cache.php',
							"RedisCache" => 'botman/botman/src/Cache/RedisCache.php',
							"SymfonyCache" => 'botman/botman/src/Cache/SymfonyCache.php',
						],
					],
					"Commands" => [
						"_Items" => [
							"Command" => 'botman/botman/src/Commands/Command.php',
							"ConversationManager" => 'botman/botman/src/Commands/ConversationManager.php',
						],
					],
					"Container" => [
						"_Items" => [
							"LaravelContainer" => 'botman/botman/src/Container/LaravelContainer.php',
						],
					],
					"Drivers" => [
						"Events" => [
							"_Items" => [
								"GenericEvent" => 'botman/botman/src/Drivers/Events/GenericEvent.php',
							],
						],
						"_Items" => [
							"DriverManager" => 'botman/botman/src/Drivers/DriverManager.php',
							"HttpDriver" => 'botman/botman/src/Drivers/HttpDriver.php',
							"NullDriver" => 'botman/botman/src/Drivers/NullDriver.php',
						],
					],
					"Exceptions" => [
						"Base" => [
							"_Items" => [
								"BotManException" => 'botman/botman/src/Exceptions/Base/BotManException.php',
								"DriverAttachmentException" => 'botman/botman/src/Exceptions/Base/DriverAttachmentException.php',
								"DriverException" => 'botman/botman/src/Exceptions/Base/DriverException.php',
							],
						],
						"Core" => [
							"_Items" => [
								"BadMethodCallException" => 'botman/botman/src/Exceptions/Core/BadMethodCallException.php',
								"UnexpectedValueException" => 'botman/botman/src/Exceptions/Core/UnexpectedValueException.php',
							],
						],
						"_Items" => [
						],
					],
					"Facades" => [
						"_Items" => [
							"BotMan" => 'botman/botman/src/Facades/BotMan.php',
						],
					],
					"Handlers" => [
						"_Items" => [
							"ExceptionHandler" => 'botman/botman/src/Handlers/ExceptionHandler.php',
						],
					],
					"Http" => [
						"_Items" => [
							"Curl" => 'botman/botman/src/Http/Curl.php',
						],
					],
					"Interfaces" => [
						"Middleware" => [
							"_Items" => [
								"Captured" => 'botman/botman/src/Interfaces/Middleware/Captured.php',
								"Heard" => 'botman/botman/src/Interfaces/Middleware/Heard.php',
								"Matching" => 'botman/botman/src/Interfaces/Middleware/Matching.php',
								"Received" => 'botman/botman/src/Interfaces/Middleware/Received.php',
								"Sending" => 'botman/botman/src/Interfaces/Middleware/Sending.php',
							],
						],
						"_Items" => [
							"CacheInterface" => 'botman/botman/src/Interfaces/CacheInterface.php',
							"DriverEventInterface" => 'botman/botman/src/Interfaces/DriverEventInterface.php',
							"DriverInterface" => 'botman/botman/src/Interfaces/DriverInterface.php',
							"ExceptionHandlerInterface" => 'botman/botman/src/Interfaces/ExceptionHandlerInterface.php',
							"HttpInterface" => 'botman/botman/src/Interfaces/HttpInterface.php',
							"MiddlewareInterface" => 'botman/botman/src/Interfaces/MiddlewareInterface.php',
							"QuestionActionInterface" => 'botman/botman/src/Interfaces/QuestionActionInterface.php',
							"ShouldQueue" => 'botman/botman/src/Interfaces/ShouldQueue.php',
							"StorageInterface" => 'botman/botman/src/Interfaces/StorageInterface.php',
							"UserInterface" => 'botman/botman/src/Interfaces/UserInterface.php',
							"VerifiesService" => 'botman/botman/src/Interfaces/VerifiesService.php',
							"WebAccess" => 'botman/botman/src/Interfaces/WebAccess.php',
						],
					],
					"Messages" => [
						"Attachments" => [
							"_Items" => [
								"Attachment" => 'botman/botman/src/Messages/Attachments/Attachment.php',
								"Audio" => 'botman/botman/src/Messages/Attachments/Audio.php',
								"Contact" => 'botman/botman/src/Messages/Attachments/Contact.php',
								"File" => 'botman/botman/src/Messages/Attachments/File.php',
								"Image" => 'botman/botman/src/Messages/Attachments/Image.php',
								"Location" => 'botman/botman/src/Messages/Attachments/Location.php',
								"Video" => 'botman/botman/src/Messages/Attachments/Video.php',
							],
						],
						"Conversations" => [
							"_Items" => [
								"Conversation" => 'botman/botman/src/Messages/Conversations/Conversation.php',
								"InlineConversation" => 'botman/botman/src/Messages/Conversations/InlineConversation.php',
							],
						],
						"Incoming" => [
							"_Items" => [
								"Answer" => 'botman/botman/src/Messages/Incoming/Answer.php',
								"IncomingMessage" => 'botman/botman/src/Messages/Incoming/IncomingMessage.php',
							],
						],
						"Matching" => [
							"_Items" => [
								"MatchingMessage" => 'botman/botman/src/Messages/Matching/MatchingMessage.php',
							],
						],
						"Outgoing" => [
							"Actions" => [
								"_Items" => [
									"Button" => 'botman/botman/src/Messages/Outgoing/Actions/Button.php',
								],
							],
							"_Items" => [
								"OutgoingMessage" => 'botman/botman/src/Messages/Outgoing/OutgoingMessage.php',
								"Question" => 'botman/botman/src/Messages/Outgoing/Question.php',
							],
						],
						"_Items" => [
							"Matcher" => 'botman/botman/src/Messages/Matcher.php',
						],
					],
					"Middleware" => [
						"_Items" => [
							"ApiAi" => 'botman/botman/src/Middleware/ApiAi.php',
							"Dialogflow" => 'botman/botman/src/Middleware/Dialogflow.php',
							"MiddlewareManager" => 'botman/botman/src/Middleware/MiddlewareManager.php',
							"Wit" => 'botman/botman/src/Middleware/Wit.php',
						],
					],
					"Storages" => [
						"Drivers" => [
							"_Items" => [
								"FileStorage" => 'botman/botman/src/Storages/Drivers/FileStorage.php',
								"RedisStorage" => 'botman/botman/src/Storages/Drivers/RedisStorage.php',
							],
						],
						"_Items" => [
							"Storage" => 'botman/botman/src/Storages/Storage.php',
						],
					],
					"Traits" => [
						"_Items" => [
							"HandlesConversations" => 'botman/botman/src/Traits/HandlesConversations.php',
							"HandlesExceptions" => 'botman/botman/src/Traits/HandlesExceptions.php',
							"ProvidesStorage" => 'botman/botman/src/Traits/ProvidesStorage.php',
						],
					],
					"Users" => [
						"_Items" => [
							"User" => 'botman/botman/src/Users/User.php',
						],
					],
					"_Items" => [
						"BotMan" => 'botman/botman/src/BotMan.php',
						"BotManFactory" => 'botman/botman/src/BotManFactory.php',
						"BotManServiceProvider" => 'botman/botman/src/BotManServiceProvider.php',
					],
				],
				"Drivers" => [
					"Facebook" => [
						"Commands" => [
							"_Items" => [
								"AddGreetingText" => 'botman/driver-facebook/src/Commands/AddGreetingText.php',
								"AddPersistentMenu" => 'botman/driver-facebook/src/Commands/AddPersistentMenu.php',
								"AddStartButtonPayload" => 'botman/driver-facebook/src/Commands/AddStartButtonPayload.php',
								"Nlp" => 'botman/driver-facebook/src/Commands/Nlp.php',
								"WhitelistDomains" => 'botman/driver-facebook/src/Commands/WhitelistDomains.php',
							],
						],
						"Events" => [
							"_Items" => [
								"FacebookEvent" => 'botman/driver-facebook/src/Events/FacebookEvent.php',
								"MessagingAccountLinking" => 'botman/driver-facebook/src/Events/MessagingAccountLinking.php',
								"MessagingCheckoutUpdates" => 'botman/driver-facebook/src/Events/MessagingCheckoutUpdates.php',
								"MessagingDeliveries" => 'botman/driver-facebook/src/Events/MessagingDeliveries.php',
								"MessagingOptins" => 'botman/driver-facebook/src/Events/MessagingOptins.php',
								"MessagingPostbacks" => 'botman/driver-facebook/src/Events/MessagingPostbacks.php',
								"MessagingReads" => 'botman/driver-facebook/src/Events/MessagingReads.php',
								"MessagingReferrals" => 'botman/driver-facebook/src/Events/MessagingReferrals.php',
							],
						],
						"Exceptions" => [
							"_Items" => [
								"FacebookException" => 'botman/driver-facebook/src/Exceptions/FacebookException.php',
							],
						],
						"Extensions" => [
							"Airline" => [
								"_Items" => [
									"AbstractAirlineFlightInfo" => 'botman/driver-facebook/src/Extensions/Airline/AbstractAirlineFlightInfo.php',
									"AirlineAirport" => 'botman/driver-facebook/src/Extensions/Airline/AirlineAirport.php',
									"AirlineBoardingPass" => 'botman/driver-facebook/src/Extensions/Airline/AirlineBoardingPass.php',
									"AirlineExtendedFlightInfo" => 'botman/driver-facebook/src/Extensions/Airline/AirlineExtendedFlightInfo.php',
									"AirlineFlightInfo" => 'botman/driver-facebook/src/Extensions/Airline/AirlineFlightInfo.php',
									"AirlineFlightSchedule" => 'botman/driver-facebook/src/Extensions/Airline/AirlineFlightSchedule.php',
									"AirlinePassengerInfo" => 'botman/driver-facebook/src/Extensions/Airline/AirlinePassengerInfo.php',
									"AirlinePassengerSegmentInfo" => 'botman/driver-facebook/src/Extensions/Airline/AirlinePassengerSegmentInfo.php',
								],
							],
							"_Items" => [
								"AbstractAirlineTemplate" => 'botman/driver-facebook/src/Extensions/AbstractAirlineTemplate.php',
								"AirlineBoardingPassTemplate" => 'botman/driver-facebook/src/Extensions/AirlineBoardingPassTemplate.php',
								"AirlineCheckInTemplate" => 'botman/driver-facebook/src/Extensions/AirlineCheckInTemplate.php',
								"AirlineItineraryTemplate" => 'botman/driver-facebook/src/Extensions/AirlineItineraryTemplate.php',
								"AirlineUpdateTemplate" => 'botman/driver-facebook/src/Extensions/AirlineUpdateTemplate.php',
								"ButtonTemplate" => 'botman/driver-facebook/src/Extensions/ButtonTemplate.php',
								"Element" => 'botman/driver-facebook/src/Extensions/Element.php',
								"ElementButton" => 'botman/driver-facebook/src/Extensions/ElementButton.php',
								"GenericTemplate" => 'botman/driver-facebook/src/Extensions/GenericTemplate.php',
								"ListTemplate" => 'botman/driver-facebook/src/Extensions/ListTemplate.php',
								"MediaAttachmentElement" => 'botman/driver-facebook/src/Extensions/MediaAttachmentElement.php',
								"MediaTemplate" => 'botman/driver-facebook/src/Extensions/MediaTemplate.php',
								"MediaUrlElement" => 'botman/driver-facebook/src/Extensions/MediaUrlElement.php',
								"OpenGraphElement" => 'botman/driver-facebook/src/Extensions/OpenGraphElement.php',
								"OpenGraphTemplate" => 'botman/driver-facebook/src/Extensions/OpenGraphTemplate.php',
								"QuickReplyButton" => 'botman/driver-facebook/src/Extensions/QuickReplyButton.php',
								"ReceiptAddress" => 'botman/driver-facebook/src/Extensions/ReceiptAddress.php',
								"ReceiptAdjustment" => 'botman/driver-facebook/src/Extensions/ReceiptAdjustment.php',
								"ReceiptElement" => 'botman/driver-facebook/src/Extensions/ReceiptElement.php',
								"ReceiptSummary" => 'botman/driver-facebook/src/Extensions/ReceiptSummary.php',
								"ReceiptTemplate" => 'botman/driver-facebook/src/Extensions/ReceiptTemplate.php',
								"User" => 'botman/driver-facebook/src/Extensions/User.php',
							],
						],
						"Interfaces" => [
							"_Items" => [
								"Airline" => 'botman/driver-facebook/src/Interfaces/Airline.php',
							],
						],
						"Providers" => [
							"_Items" => [
								"FacebookServiceProvider" => 'botman/driver-facebook/src/Providers/FacebookServiceProvider.php',
							],
						],
						"_Items" => [
							"FacebookAudioDriver" => 'botman/driver-facebook/src/FacebookAudioDriver.php',
							"FacebookDriver" => 'botman/driver-facebook/src/FacebookDriver.php',
							"FacebookFileDriver" => 'botman/driver-facebook/src/FacebookFileDriver.php',
							"FacebookImageDriver" => 'botman/driver-facebook/src/FacebookImageDriver.php',
							"FacebookLocationDriver" => 'botman/driver-facebook/src/FacebookLocationDriver.php',
							"FacebookVideoDriver" => 'botman/driver-facebook/src/FacebookVideoDriver.php',
						],
					],
					"_Items" => [
					],
				],
				"_Items" => [
				],
			],
			"Composer" => [
				"Autoload" => [
					"_Items" => [
						"ComposerStaticInited52258c47506bb06cd8d32fdf88156a" => 'composer/autoload_static.php',
						"ClassLoader" => 'composer/ClassLoader.php',
					],
				],
				"_Items" => [
				],
			],
			"Doctrine" => [
				"Common" => [
					"Annotations" => [
						"Annotation" => [
							"_Items" => [
								"Attribute" => 'doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Attribute.php',
								"Attributes" => 'doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Attributes.php',
								"Enum" => 'doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Enum.php',
								"IgnoreAnnotation" => 'doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/IgnoreAnnotation.php',
								"Required" => 'doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Required.php',
								"Target" => 'doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Target.php',
							],
						],
						"_Items" => [
							"Annotation" => 'doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation.php',
							"AnnotationException" => 'doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationException.php',
							"AnnotationReader" => 'doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php',
							"AnnotationRegistry" => 'doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php',
							"CachedReader" => 'doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php',
							"DocLexer" => 'doctrine/annotations/lib/Doctrine/Common/Annotations/DocLexer.php',
							"DocParser" => 'doctrine/annotations/lib/Doctrine/Common/Annotations/DocParser.php',
							"FileCacheReader" => 'doctrine/annotations/lib/Doctrine/Common/Annotations/FileCacheReader.php',
							"IndexedReader" => 'doctrine/annotations/lib/Doctrine/Common/Annotations/IndexedReader.php',
							"PhpParser" => 'doctrine/annotations/lib/Doctrine/Common/Annotations/PhpParser.php',
							"Reader" => 'doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php',
							"SimpleAnnotationReader" => 'doctrine/annotations/lib/Doctrine/Common/Annotations/SimpleAnnotationReader.php',
							"TokenParser" => 'doctrine/annotations/lib/Doctrine/Common/Annotations/TokenParser.php',
						],
					],
					"Cache" => [
						"_Items" => [
							"ApcCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/ApcCache.php',
							"ApcuCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/ApcuCache.php',
							"ArrayCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/ArrayCache.php',
							"Cache" => 'doctrine/cache/lib/Doctrine/Common/Cache/Cache.php',
							"CacheProvider" => 'doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php',
							"ChainCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/ChainCache.php',
							"ClearableCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php',
							"CouchbaseBucketCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/CouchbaseBucketCache.php',
							"CouchbaseCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/CouchbaseCache.php',
							"ExtMongoDBCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/ExtMongoDBCache.php',
							"FileCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/FileCache.php',
							"FilesystemCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/FilesystemCache.php',
							"FlushableCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php',
							"LegacyMongoDBCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/LegacyMongoDBCache.php',
							"MemcacheCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/MemcacheCache.php',
							"MemcachedCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/MemcachedCache.php',
							"MongoDBCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/MongoDBCache.php',
							"MultiDeleteCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/MultiDeleteCache.php',
							"MultiGetCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php',
							"MultiOperationCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/MultiOperationCache.php',
							"MultiPutCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php',
							"PhpFileCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/PhpFileCache.php',
							"PredisCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/PredisCache.php',
							"RedisCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/RedisCache.php',
							"RiakCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/RiakCache.php',
							"SQLite3Cache" => 'doctrine/cache/lib/Doctrine/Common/Cache/SQLite3Cache.php',
							"Version" => 'doctrine/cache/lib/Doctrine/Common/Cache/Version.php',
							"VoidCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/VoidCache.php',
							"WinCacheCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/WinCacheCache.php',
							"XcacheCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/XcacheCache.php',
							"ZendDataCache" => 'doctrine/cache/lib/Doctrine/Common/Cache/ZendDataCache.php',
						],
					],
					"Collections" => [
						"Expr" => [
							"_Items" => [
								"ClosureExpressionVisitor" => 'doctrine/collections/lib/Doctrine/Common/Collections/Expr/ClosureExpressionVisitor.php',
								"Comparison" => 'doctrine/collections/lib/Doctrine/Common/Collections/Expr/Comparison.php',
								"CompositeExpression" => 'doctrine/collections/lib/Doctrine/Common/Collections/Expr/CompositeExpression.php',
								"Expression" => 'doctrine/collections/lib/Doctrine/Common/Collections/Expr/Expression.php',
								"ExpressionVisitor" => 'doctrine/collections/lib/Doctrine/Common/Collections/Expr/ExpressionVisitor.php',
								"Value" => 'doctrine/collections/lib/Doctrine/Common/Collections/Expr/Value.php',
							],
						],
						"_Items" => [
							"AbstractLazyCollection" => 'doctrine/collections/lib/Doctrine/Common/Collections/AbstractLazyCollection.php',
							"ArrayCollection" => 'doctrine/collections/lib/Doctrine/Common/Collections/ArrayCollection.php',
							"Collection" => 'doctrine/collections/lib/Doctrine/Common/Collections/Collection.php',
							"Criteria" => 'doctrine/collections/lib/Doctrine/Common/Collections/Criteria.php',
							"ExpressionBuilder" => 'doctrine/collections/lib/Doctrine/Common/Collections/ExpressionBuilder.php',
							"Selectable" => 'doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php',
						],
					],
					"Proxy" => [
						"Exception" => [
							"_Items" => [
								"InvalidArgumentException" => 'doctrine/common/lib/Doctrine/Common/Proxy/Exception/InvalidArgumentException.php',
								"OutOfBoundsException" => 'doctrine/common/lib/Doctrine/Common/Proxy/Exception/OutOfBoundsException.php',
								"ProxyException" => 'doctrine/common/lib/Doctrine/Common/Proxy/Exception/ProxyException.php',
								"UnexpectedValueException" => 'doctrine/common/lib/Doctrine/Common/Proxy/Exception/UnexpectedValueException.php',
							],
						],
						"_Items" => [
							"AbstractProxyFactory" => 'doctrine/common/lib/Doctrine/Common/Proxy/AbstractProxyFactory.php',
							"Autoloader" => 'doctrine/common/lib/Doctrine/Common/Proxy/Autoloader.php',
							"Proxy" => 'doctrine/common/lib/Doctrine/Common/Proxy/Proxy.php',
							"ProxyDefinition" => 'doctrine/common/lib/Doctrine/Common/Proxy/ProxyDefinition.php',
							"ProxyGenerator" => 'doctrine/common/lib/Doctrine/Common/Proxy/ProxyGenerator.php',
						],
					],
					"Util" => [
						"_Items" => [
							"ClassUtils" => 'doctrine/common/lib/Doctrine/Common/Util/ClassUtils.php',
							"Debug" => 'doctrine/common/lib/Doctrine/Common/Util/Debug.php',
							"Inflector" => 'doctrine/common/lib/Doctrine/Common/Util/Inflector.php',
						],
					],
					"Inflector" => [
						"_Items" => [
							"Inflector" => 'doctrine/inflector/lib/Doctrine/Common/Inflector/Inflector.php',
						],
					],
					"Lexer" => [
						"_Items" => [
							"AbstractLexer" => 'doctrine/lexer/lib/Doctrine/Common/Lexer/AbstractLexer.php',
						],
					],
					"Persistence" => [
						"Event" => [
							"_Items" => [
								"LifecycleEventArgs" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/Event/LifecycleEventArgs.php',
								"LoadClassMetadataEventArgs" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/Event/LoadClassMetadataEventArgs.php',
								"ManagerEventArgs" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/Event/ManagerEventArgs.php',
								"OnClearEventArgs" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/Event/OnClearEventArgs.php',
								"PreUpdateEventArgs" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/Event/PreUpdateEventArgs.php',
							],
						],
						"Mapping" => [
							"Driver" => [
								"_Items" => [
									"AnnotationDriver" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/AnnotationDriver.php',
									"DefaultFileLocator" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/DefaultFileLocator.php',
									"FileDriver" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/FileDriver.php',
									"FileLocator" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/FileLocator.php',
									"MappingDriver" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriver.php',
									"MappingDriverChain" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriverChain.php',
									"PHPDriver" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/PHPDriver.php',
									"StaticPHPDriver" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/StaticPHPDriver.php',
									"SymfonyFileLocator" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/SymfonyFileLocator.php',
								],
							],
							"_Items" => [
								"AbstractClassMetadataFactory" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/AbstractClassMetadataFactory.php',
								"ClassMetadata" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ClassMetadata.php',
								"ClassMetadataFactory" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ClassMetadataFactory.php',
								"MappingException" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/MappingException.php',
								"ReflectionService" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ReflectionService.php',
								"RuntimeReflectionService" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/RuntimeReflectionService.php',
								"StaticReflectionService" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/StaticReflectionService.php',
							],
						],
						"_Items" => [
							"AbstractManagerRegistry" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/AbstractManagerRegistry.php',
							"ConnectionRegistry" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/ConnectionRegistry.php',
							"ManagerRegistry" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/ManagerRegistry.php',
							"ObjectManager" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectManager.php',
							"ObjectManagerAware" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectManagerAware.php',
							"ObjectManagerDecorator" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectManagerDecorator.php',
							"ObjectRepository" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectRepository.php',
							"PersistentObject" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/PersistentObject.php',
							"Proxy" => 'doctrine/persistence/lib/Doctrine/Common/Persistence/Proxy.php',
						],
					],
					"Reflection" => [
						"_Items" => [
							"ClassFinderInterface" => 'doctrine/reflection/lib/Doctrine/Common/Reflection/ClassFinderInterface.php',
							"Psr0FindFile" => 'doctrine/reflection/lib/Doctrine/Common/Reflection/Psr0FindFile.php',
							"ReflectionProviderInterface" => 'doctrine/reflection/lib/Doctrine/Common/Reflection/ReflectionProviderInterface.php',
							"RuntimePublicReflectionProperty" => 'doctrine/reflection/lib/Doctrine/Common/Reflection/RuntimePublicReflectionProperty.php',
							"StaticReflectionClass" => 'doctrine/reflection/lib/Doctrine/Common/Reflection/StaticReflectionClass.php',
							"StaticReflectionMethod" => 'doctrine/reflection/lib/Doctrine/Common/Reflection/StaticReflectionMethod.php',
							"StaticReflectionParser" => 'doctrine/reflection/lib/Doctrine/Common/Reflection/StaticReflectionParser.php',
							"StaticReflectionProperty" => 'doctrine/reflection/lib/Doctrine/Common/Reflection/StaticReflectionProperty.php',
						],
					],
					"_Items" => [
						"ClassLoader" => 'doctrine/common/lib/Doctrine/Common/ClassLoader.php',
						"CommonException" => 'doctrine/common/lib/Doctrine/Common/CommonException.php',
						"Comparable" => 'doctrine/common/lib/Doctrine/Common/Comparable.php',
						"Lexer" => 'doctrine/common/lib/Doctrine/Common/Lexer.php',
						"Version" => 'doctrine/common/lib/Doctrine/Common/Version.php',
						"EventArgs" => 'doctrine/event-manager/lib/Doctrine/Common/EventArgs.php',
						"EventManager" => 'doctrine/event-manager/lib/Doctrine/Common/EventManager.php',
						"EventSubscriber" => 'doctrine/event-manager/lib/Doctrine/Common/EventSubscriber.php',
						"NotifyPropertyChanged" => 'doctrine/persistence/lib/Doctrine/Common/NotifyPropertyChanged.php',
						"PropertyChangedListener" => 'doctrine/persistence/lib/Doctrine/Common/PropertyChangedListener.php',
					],
				],
				"DBAL" => [
					"Cache" => [
						"_Items" => [
							"ArrayStatement" => 'doctrine/dbal/lib/Doctrine/DBAL/Cache/ArrayStatement.php',
							"CacheException" => 'doctrine/dbal/lib/Doctrine/DBAL/Cache/CacheException.php',
							"QueryCacheProfile" => 'doctrine/dbal/lib/Doctrine/DBAL/Cache/QueryCacheProfile.php',
							"ResultCacheStatement" => 'doctrine/dbal/lib/Doctrine/DBAL/Cache/ResultCacheStatement.php',
						],
					],
					"Connections" => [
						"_Items" => [
							"MasterSlaveConnection" => 'doctrine/dbal/lib/Doctrine/DBAL/Connections/MasterSlaveConnection.php',
						],
					],
					"Driver" => [
						"AbstractOracleDriver" => [
							"_Items" => [
								"EasyConnectString" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractOracleDriver/EasyConnectString.php',
							],
						],
						"DrizzlePDOMySql" => [
							"_Items" => [
								"Connection" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/DrizzlePDOMySql/Connection.php',
								"Driver" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/DrizzlePDOMySql/Driver.php',
							],
						],
						"IBMDB2" => [
							"_Items" => [
								"DB2Connection" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/IBMDB2/DB2Connection.php',
								"DB2Driver" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/IBMDB2/DB2Driver.php',
								"DB2Exception" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/IBMDB2/DB2Exception.php',
								"DB2Statement" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/IBMDB2/DB2Statement.php',
							],
						],
						"Mysqli" => [
							"_Items" => [
								"Driver" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/Mysqli/Driver.php',
								"MysqliConnection" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/Mysqli/MysqliConnection.php',
								"MysqliException" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/Mysqli/MysqliException.php',
								"MysqliStatement" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/Mysqli/MysqliStatement.php',
							],
						],
						"OCI8" => [
							"_Items" => [
								"Driver" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/OCI8/Driver.php',
								"OCI8Connection" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/OCI8/OCI8Connection.php',
								"OCI8Exception" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/OCI8/OCI8Exception.php',
								"OCI8Statement" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/OCI8/OCI8Statement.php',
							],
						],
						"PDOIbm" => [
							"_Items" => [
								"Driver" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOIbm/Driver.php',
							],
						],
						"PDOMySql" => [
							"_Items" => [
								"Driver" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOMySql/Driver.php',
							],
						],
						"PDOOracle" => [
							"_Items" => [
								"Driver" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOOracle/Driver.php',
							],
						],
						"PDOPgSql" => [
							"_Items" => [
								"Driver" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOPgSql/Driver.php',
							],
						],
						"PDOSqlite" => [
							"_Items" => [
								"Driver" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlite/Driver.php',
							],
						],
						"PDOSqlsrv" => [
							"_Items" => [
								"Connection" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Connection.php',
								"Driver" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Driver.php',
								"Statement" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Statement.php',
							],
						],
						"SQLAnywhere" => [
							"_Items" => [
								"Driver" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLAnywhere/Driver.php',
								"SQLAnywhereConnection" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLAnywhere/SQLAnywhereConnection.php',
								"SQLAnywhereException" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLAnywhere/SQLAnywhereException.php',
								"SQLAnywhereStatement" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLAnywhere/SQLAnywhereStatement.php',
							],
						],
						"SQLSrv" => [
							"_Items" => [
								"Driver" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/Driver.php',
								"LastInsertId" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/LastInsertId.php',
								"SQLSrvConnection" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/SQLSrvConnection.php',
								"SQLSrvException" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/SQLSrvException.php',
								"SQLSrvStatement" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/SQLSrvStatement.php',
							],
						],
						"_Items" => [
							"AbstractDB2Driver" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractDB2Driver.php',
							"AbstractDriverException" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractDriverException.php',
							"AbstractMySQLDriver" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractMySQLDriver.php',
							"AbstractOracleDriver" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractOracleDriver.php',
							"AbstractPostgreSQLDriver" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractPostgreSQLDriver.php',
							"AbstractSQLAnywhereDriver" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractSQLAnywhereDriver.php',
							"AbstractSQLiteDriver" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractSQLiteDriver.php',
							"AbstractSQLServerDriver" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractSQLServerDriver.php',
							"Connection" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/Connection.php',
							"DriverException" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/DriverException.php',
							"ExceptionConverterDriver" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/ExceptionConverterDriver.php',
							"PDOConnection" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOConnection.php',
							"PDOException" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOException.php',
							"PDOStatement" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOStatement.php',
							"PingableConnection" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/PingableConnection.php',
							"ResultStatement" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/ResultStatement.php',
							"ServerInfoAwareConnection" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/ServerInfoAwareConnection.php',
							"Statement" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/Statement.php',
							"StatementIterator" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver/StatementIterator.php',
						],
					],
					"Event" => [
						"Listeners" => [
							"_Items" => [
								"MysqlSessionInit" => 'doctrine/dbal/lib/Doctrine/DBAL/Event/Listeners/MysqlSessionInit.php',
								"OracleSessionInit" => 'doctrine/dbal/lib/Doctrine/DBAL/Event/Listeners/OracleSessionInit.php',
								"SQLSessionInit" => 'doctrine/dbal/lib/Doctrine/DBAL/Event/Listeners/SQLSessionInit.php',
							],
						],
						"_Items" => [
							"ConnectionEventArgs" => 'doctrine/dbal/lib/Doctrine/DBAL/Event/ConnectionEventArgs.php',
							"SchemaAlterTableAddColumnEventArgs" => 'doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableAddColumnEventArgs.php',
							"SchemaAlterTableChangeColumnEventArgs" => 'doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableChangeColumnEventArgs.php',
							"SchemaAlterTableEventArgs" => 'doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableEventArgs.php',
							"SchemaAlterTableRemoveColumnEventArgs" => 'doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableRemoveColumnEventArgs.php',
							"SchemaAlterTableRenameColumnEventArgs" => 'doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableRenameColumnEventArgs.php',
							"SchemaColumnDefinitionEventArgs" => 'doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaColumnDefinitionEventArgs.php',
							"SchemaCreateTableColumnEventArgs" => 'doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaCreateTableColumnEventArgs.php',
							"SchemaCreateTableEventArgs" => 'doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaCreateTableEventArgs.php',
							"SchemaDropTableEventArgs" => 'doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaDropTableEventArgs.php',
							"SchemaEventArgs" => 'doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaEventArgs.php',
							"SchemaIndexDefinitionEventArgs" => 'doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaIndexDefinitionEventArgs.php',
						],
					],
					"Exception" => [
						"_Items" => [
							"ConnectionException" => 'doctrine/dbal/lib/Doctrine/DBAL/Exception/ConnectionException.php',
							"ConstraintViolationException" => 'doctrine/dbal/lib/Doctrine/DBAL/Exception/ConstraintViolationException.php',
							"DatabaseObjectExistsException" => 'doctrine/dbal/lib/Doctrine/DBAL/Exception/DatabaseObjectExistsException.php',
							"DatabaseObjectNotFoundException" => 'doctrine/dbal/lib/Doctrine/DBAL/Exception/DatabaseObjectNotFoundException.php',
							"DeadlockException" => 'doctrine/dbal/lib/Doctrine/DBAL/Exception/DeadlockException.php',
							"DriverException" => 'doctrine/dbal/lib/Doctrine/DBAL/Exception/DriverException.php',
							"ForeignKeyConstraintViolationException" => 'doctrine/dbal/lib/Doctrine/DBAL/Exception/ForeignKeyConstraintViolationException.php',
							"InvalidArgumentException" => 'doctrine/dbal/lib/Doctrine/DBAL/Exception/InvalidArgumentException.php',
							"InvalidFieldNameException" => 'doctrine/dbal/lib/Doctrine/DBAL/Exception/InvalidFieldNameException.php',
							"LockWaitTimeoutException" => 'doctrine/dbal/lib/Doctrine/DBAL/Exception/LockWaitTimeoutException.php',
							"NonUniqueFieldNameException" => 'doctrine/dbal/lib/Doctrine/DBAL/Exception/NonUniqueFieldNameException.php',
							"NotNullConstraintViolationException" => 'doctrine/dbal/lib/Doctrine/DBAL/Exception/NotNullConstraintViolationException.php',
							"ReadOnlyException" => 'doctrine/dbal/lib/Doctrine/DBAL/Exception/ReadOnlyException.php',
							"RetryableException" => 'doctrine/dbal/lib/Doctrine/DBAL/Exception/RetryableException.php',
							"ServerException" => 'doctrine/dbal/lib/Doctrine/DBAL/Exception/ServerException.php',
							"SyntaxErrorException" => 'doctrine/dbal/lib/Doctrine/DBAL/Exception/SyntaxErrorException.php',
							"TableExistsException" => 'doctrine/dbal/lib/Doctrine/DBAL/Exception/TableExistsException.php',
							"TableNotFoundException" => 'doctrine/dbal/lib/Doctrine/DBAL/Exception/TableNotFoundException.php',
							"UniqueConstraintViolationException" => 'doctrine/dbal/lib/Doctrine/DBAL/Exception/UniqueConstraintViolationException.php',
						],
					],
					"Id" => [
						"_Items" => [
							"TableGenerator" => 'doctrine/dbal/lib/Doctrine/DBAL/Id/TableGenerator.php',
							"TableGeneratorSchemaVisitor" => 'doctrine/dbal/lib/Doctrine/DBAL/Id/TableGeneratorSchemaVisitor.php',
						],
					],
					"Logging" => [
						"_Items" => [
							"DebugStack" => 'doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php',
							"EchoSQLLogger" => 'doctrine/dbal/lib/Doctrine/DBAL/Logging/EchoSQLLogger.php',
							"LoggerChain" => 'doctrine/dbal/lib/Doctrine/DBAL/Logging/LoggerChain.php',
							"SQLLogger" => 'doctrine/dbal/lib/Doctrine/DBAL/Logging/SQLLogger.php',
						],
					],
					"Platforms" => [
						"Keywords" => [
							"_Items" => [
								"DB2Keywords" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/DB2Keywords.php',
								"DrizzleKeywords" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/DrizzleKeywords.php',
								"KeywordList" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/KeywordList.php',
								"MariaDb102Keywords" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/MariaDb102Keywords.php',
								"MsSQLKeywords" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/MsSQLKeywords.php',
								"MySQL57Keywords" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/MySQL57Keywords.php',
								"MySQL80Keywords" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/MySQL80Keywords.php',
								"MySQLKeywords" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/MySQLKeywords.php',
								"OracleKeywords" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/OracleKeywords.php',
								"PostgreSQL100Keywords" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/PostgreSQL100Keywords.php',
								"PostgreSQL91Keywords" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/PostgreSQL91Keywords.php',
								"PostgreSQL92Keywords" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/PostgreSQL92Keywords.php',
								"PostgreSQL94Keywords" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/PostgreSQL94Keywords.php',
								"PostgreSQLKeywords" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/PostgreSQLKeywords.php',
								"ReservedKeywordsValidator" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/ReservedKeywordsValidator.php',
								"SQLAnywhere11Keywords" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhere11Keywords.php',
								"SQLAnywhere12Keywords" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhere12Keywords.php',
								"SQLAnywhere16Keywords" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhere16Keywords.php',
								"SQLAnywhereKeywords" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhereKeywords.php',
								"SQLiteKeywords" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLiteKeywords.php',
								"SQLServer2005Keywords" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLServer2005Keywords.php',
								"SQLServer2008Keywords" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLServer2008Keywords.php',
								"SQLServer2012Keywords" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLServer2012Keywords.php',
								"SQLServerKeywords" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLServerKeywords.php',
							],
						],
						"_Items" => [
							"AbstractPlatform" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/AbstractPlatform.php',
							"DateIntervalUnit" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/DateIntervalUnit.php',
							"DB2Platform" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/DB2Platform.php',
							"DrizzlePlatform" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/DrizzlePlatform.php',
							"MariaDb1027Platform" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/MariaDb1027Platform.php',
							"MySQL57Platform" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/MySQL57Platform.php',
							"MySQL80Platform" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/MySQL80Platform.php',
							"MySqlPlatform" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/MySqlPlatform.php',
							"OraclePlatform" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/OraclePlatform.php',
							"PostgreSQL100Platform" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL100Platform.php',
							"PostgreSQL91Platform" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL91Platform.php',
							"PostgreSQL92Platform" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL92Platform.php',
							"PostgreSQL94Platform" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL94Platform.php',
							"PostgreSqlPlatform" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSqlPlatform.php',
							"SQLAnywhere11Platform" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywhere11Platform.php',
							"SQLAnywhere12Platform" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywhere12Platform.php',
							"SQLAnywhere16Platform" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywhere16Platform.php',
							"SQLAnywherePlatform" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywherePlatform.php',
							"SQLAzurePlatform" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAzurePlatform.php',
							"SqlitePlatform" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/SqlitePlatform.php',
							"SQLServer2005Platform" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLServer2005Platform.php',
							"SQLServer2008Platform" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLServer2008Platform.php',
							"SQLServer2012Platform" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLServer2012Platform.php',
							"SQLServerPlatform" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLServerPlatform.php',
							"TrimMode" => 'doctrine/dbal/lib/Doctrine/DBAL/Platforms/TrimMode.php',
						],
					],
					"Portability" => [
						"_Items" => [
							"Connection" => 'doctrine/dbal/lib/Doctrine/DBAL/Portability/Connection.php',
							"Statement" => 'doctrine/dbal/lib/Doctrine/DBAL/Portability/Statement.php',
						],
					],
					"Query" => [
						"Expression" => [
							"_Items" => [
								"CompositeExpression" => 'doctrine/dbal/lib/Doctrine/DBAL/Query/Expression/CompositeExpression.php',
								"ExpressionBuilder" => 'doctrine/dbal/lib/Doctrine/DBAL/Query/Expression/ExpressionBuilder.php',
							],
						],
						"_Items" => [
							"QueryBuilder" => 'doctrine/dbal/lib/Doctrine/DBAL/Query/QueryBuilder.php',
							"QueryException" => 'doctrine/dbal/lib/Doctrine/DBAL/Query/QueryException.php',
						],
					],
					"Schema" => [
						"Synchronizer" => [
							"_Items" => [
								"AbstractSchemaSynchronizer" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/AbstractSchemaSynchronizer.php',
								"SchemaSynchronizer" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/SchemaSynchronizer.php',
								"SingleDatabaseSynchronizer" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/SingleDatabaseSynchronizer.php',
							],
						],
						"Visitor" => [
							"_Items" => [
								"AbstractVisitor" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/AbstractVisitor.php',
								"CreateSchemaSqlCollector" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/CreateSchemaSqlCollector.php',
								"DropSchemaSqlCollector" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/DropSchemaSqlCollector.php',
								"Graphviz" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/Graphviz.php',
								"NamespaceVisitor" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/NamespaceVisitor.php',
								"RemoveNamespacedAssets" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/RemoveNamespacedAssets.php',
								"SchemaDiffVisitor" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/SchemaDiffVisitor.php',
								"Visitor" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/Visitor.php',
							],
						],
						"_Items" => [
							"AbstractAsset" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/AbstractAsset.php',
							"AbstractSchemaManager" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/AbstractSchemaManager.php',
							"Column" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/Column.php',
							"ColumnDiff" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/ColumnDiff.php',
							"Comparator" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/Comparator.php',
							"Constraint" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/Constraint.php',
							"DB2SchemaManager" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/DB2SchemaManager.php',
							"DrizzleSchemaManager" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/DrizzleSchemaManager.php',
							"ForeignKeyConstraint" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/ForeignKeyConstraint.php',
							"Identifier" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/Identifier.php',
							"Index" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/Index.php',
							"MySqlSchemaManager" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/MySqlSchemaManager.php',
							"OracleSchemaManager" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/OracleSchemaManager.php',
							"PostgreSqlSchemaManager" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/PostgreSqlSchemaManager.php',
							"Schema" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/Schema.php',
							"SchemaConfig" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/SchemaConfig.php',
							"SchemaDiff" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/SchemaDiff.php',
							"SchemaException" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/SchemaException.php',
							"Sequence" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/Sequence.php',
							"SQLAnywhereSchemaManager" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/SQLAnywhereSchemaManager.php',
							"SqliteSchemaManager" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/SqliteSchemaManager.php',
							"SQLServerSchemaManager" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/SQLServerSchemaManager.php',
							"Table" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/Table.php',
							"TableDiff" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/TableDiff.php',
							"View" => 'doctrine/dbal/lib/Doctrine/DBAL/Schema/View.php',
						],
					],
					"Sharding" => [
						"ShardChoser" => [
							"_Items" => [
								"MultiTenantShardChoser" => 'doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardChoser/MultiTenantShardChoser.php',
								"ShardChoser" => 'doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardChoser/ShardChoser.php',
							],
						],
						"SQLAzure" => [
							"Schema" => [
								"_Items" => [
									"MultiTenantVisitor" => 'doctrine/dbal/lib/Doctrine/DBAL/Sharding/SQLAzure/Schema/MultiTenantVisitor.php',
								],
							],
							"_Items" => [
								"SQLAzureFederationsSynchronizer" => 'doctrine/dbal/lib/Doctrine/DBAL/Sharding/SQLAzure/SQLAzureFederationsSynchronizer.php',
								"SQLAzureShardManager" => 'doctrine/dbal/lib/Doctrine/DBAL/Sharding/SQLAzure/SQLAzureShardManager.php',
							],
						],
						"_Items" => [
							"PoolingShardConnection" => 'doctrine/dbal/lib/Doctrine/DBAL/Sharding/PoolingShardConnection.php',
							"PoolingShardManager" => 'doctrine/dbal/lib/Doctrine/DBAL/Sharding/PoolingShardManager.php',
							"ShardingException" => 'doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardingException.php',
							"ShardManager" => 'doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardManager.php',
						],
					],
					"Tools" => [
						"Console" => [
							"Command" => [
								"_Items" => [
									"ImportCommand" => 'doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/ImportCommand.php',
									"ReservedWordsCommand" => 'doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/ReservedWordsCommand.php',
									"RunSqlCommand" => 'doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/RunSqlCommand.php',
								],
							],
							"Helper" => [
								"_Items" => [
									"ConnectionHelper" => 'doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Helper/ConnectionHelper.php',
								],
							],
							"_Items" => [
								"ConsoleRunner" => 'doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/ConsoleRunner.php',
							],
						],
						"_Items" => [
							"Dumper" => 'doctrine/dbal/lib/Doctrine/DBAL/Tools/Dumper.php',
						],
					],
					"Types" => [
						"_Items" => [
							"ArrayType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/ArrayType.php',
							"BigIntType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/BigIntType.php',
							"BinaryType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/BinaryType.php',
							"BlobType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/BlobType.php',
							"BooleanType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/BooleanType.php',
							"ConversionException" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/ConversionException.php',
							"DateImmutableType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/DateImmutableType.php',
							"DateIntervalType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/DateIntervalType.php',
							"DateTimeImmutableType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/DateTimeImmutableType.php',
							"DateTimeType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/DateTimeType.php',
							"DateTimeTzImmutableType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/DateTimeTzImmutableType.php',
							"DateTimeTzType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/DateTimeTzType.php',
							"DateType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/DateType.php',
							"DecimalType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/DecimalType.php',
							"FloatType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/FloatType.php',
							"GuidType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/GuidType.php',
							"IntegerType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/IntegerType.php',
							"JsonArrayType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/JsonArrayType.php',
							"JsonType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/JsonType.php',
							"ObjectType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/ObjectType.php',
							"PhpDateTimeMappingType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/PhpDateTimeMappingType.php',
							"PhpIntegerMappingType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/PhpIntegerMappingType.php',
							"SimpleArrayType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/SimpleArrayType.php',
							"SmallIntType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/SmallIntType.php',
							"StringType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/StringType.php',
							"TextType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/TextType.php',
							"TimeImmutableType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/TimeImmutableType.php',
							"TimeType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/TimeType.php',
							"Type" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/Type.php',
							"VarDateTimeImmutableType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/VarDateTimeImmutableType.php',
							"VarDateTimeType" => 'doctrine/dbal/lib/Doctrine/DBAL/Types/VarDateTimeType.php',
						],
					],
					"_Items" => [
						"ColumnCase" => 'doctrine/dbal/lib/Doctrine/DBAL/ColumnCase.php',
						"Configuration" => 'doctrine/dbal/lib/Doctrine/DBAL/Configuration.php',
						"Connection" => 'doctrine/dbal/lib/Doctrine/DBAL/Connection.php',
						"ConnectionException" => 'doctrine/dbal/lib/Doctrine/DBAL/ConnectionException.php',
						"DBALException" => 'doctrine/dbal/lib/Doctrine/DBAL/DBALException.php',
						"Driver" => 'doctrine/dbal/lib/Doctrine/DBAL/Driver.php',
						"DriverManager" => 'doctrine/dbal/lib/Doctrine/DBAL/DriverManager.php',
						"Events" => 'doctrine/dbal/lib/Doctrine/DBAL/Events.php',
						"FetchMode" => 'doctrine/dbal/lib/Doctrine/DBAL/FetchMode.php',
						"LockMode" => 'doctrine/dbal/lib/Doctrine/DBAL/LockMode.php',
						"ParameterType" => 'doctrine/dbal/lib/Doctrine/DBAL/ParameterType.php',
						"SQLParserUtils" => 'doctrine/dbal/lib/Doctrine/DBAL/SQLParserUtils.php',
						"SQLParserUtilsException" => 'doctrine/dbal/lib/Doctrine/DBAL/SQLParserUtilsException.php',
						"Statement" => 'doctrine/dbal/lib/Doctrine/DBAL/Statement.php',
						"TransactionIsolationLevel" => 'doctrine/dbal/lib/Doctrine/DBAL/TransactionIsolationLevel.php',
						"Version" => 'doctrine/dbal/lib/Doctrine/DBAL/Version.php',
						"VersionAwarePlatformDriver" => 'doctrine/dbal/lib/Doctrine/DBAL/VersionAwarePlatformDriver.php',
					],
				],
				"Instantiator" => [
					"Exception" => [
						"_Items" => [
							"ExceptionInterface" => 'doctrine/instantiator/src/Doctrine/Instantiator/Exception/ExceptionInterface.php',
							"InvalidArgumentException" => 'doctrine/instantiator/src/Doctrine/Instantiator/Exception/InvalidArgumentException.php',
							"UnexpectedValueException" => 'doctrine/instantiator/src/Doctrine/Instantiator/Exception/UnexpectedValueException.php',
						],
					],
					"_Items" => [
						"Instantiator" => 'doctrine/instantiator/src/Doctrine/Instantiator/Instantiator.php',
						"InstantiatorInterface" => 'doctrine/instantiator/src/Doctrine/Instantiator/InstantiatorInterface.php',
					],
				],
				"ORM" => [
					"Cache" => [
						"Logging" => [
							"_Items" => [
								"CacheLogger" => 'doctrine/orm/lib/Doctrine/ORM/Cache/Logging/CacheLogger.php',
								"CacheLoggerChain" => 'doctrine/orm/lib/Doctrine/ORM/Cache/Logging/CacheLoggerChain.php',
								"StatisticsCacheLogger" => 'doctrine/orm/lib/Doctrine/ORM/Cache/Logging/StatisticsCacheLogger.php',
							],
						],
						"Persister" => [
							"Collection" => [
								"_Items" => [
									"AbstractCollectionPersister" => 'doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Collection/AbstractCollectionPersister.php',
									"CachedCollectionPersister" => 'doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Collection/CachedCollectionPersister.php',
									"NonStrictReadWriteCachedCollectionPersister" => 'doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Collection/NonStrictReadWriteCachedCollectionPersister.php',
									"ReadOnlyCachedCollectionPersister" => 'doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Collection/ReadOnlyCachedCollectionPersister.php',
									"ReadWriteCachedCollectionPersister" => 'doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Collection/ReadWriteCachedCollectionPersister.php',
								],
							],
							"Entity" => [
								"_Items" => [
									"AbstractEntityPersister" => 'doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Entity/AbstractEntityPersister.php',
									"CachedEntityPersister" => 'doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Entity/CachedEntityPersister.php',
									"NonStrictReadWriteCachedEntityPersister" => 'doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Entity/NonStrictReadWriteCachedEntityPersister.php',
									"ReadOnlyCachedEntityPersister" => 'doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Entity/ReadOnlyCachedEntityPersister.php',
									"ReadWriteCachedEntityPersister" => 'doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Entity/ReadWriteCachedEntityPersister.php',
								],
							],
							"_Items" => [
								"CachedPersister" => 'doctrine/orm/lib/Doctrine/ORM/Cache/Persister/CachedPersister.php',
							],
						],
						"Region" => [
							"_Items" => [
								"DefaultMultiGetRegion" => 'doctrine/orm/lib/Doctrine/ORM/Cache/Region/DefaultMultiGetRegion.php',
								"DefaultRegion" => 'doctrine/orm/lib/Doctrine/ORM/Cache/Region/DefaultRegion.php',
								"FileLockRegion" => 'doctrine/orm/lib/Doctrine/ORM/Cache/Region/FileLockRegion.php',
								"UpdateTimestampCache" => 'doctrine/orm/lib/Doctrine/ORM/Cache/Region/UpdateTimestampCache.php',
							],
						],
						"_Items" => [
							"AssociationCacheEntry" => 'doctrine/orm/lib/Doctrine/ORM/Cache/AssociationCacheEntry.php',
							"CacheConfiguration" => 'doctrine/orm/lib/Doctrine/ORM/Cache/CacheConfiguration.php',
							"CacheEntry" => 'doctrine/orm/lib/Doctrine/ORM/Cache/CacheEntry.php',
							"CacheException" => 'doctrine/orm/lib/Doctrine/ORM/Cache/CacheException.php',
							"CacheFactory" => 'doctrine/orm/lib/Doctrine/ORM/Cache/CacheFactory.php',
							"CacheKey" => 'doctrine/orm/lib/Doctrine/ORM/Cache/CacheKey.php',
							"CollectionCacheEntry" => 'doctrine/orm/lib/Doctrine/ORM/Cache/CollectionCacheEntry.php',
							"CollectionCacheKey" => 'doctrine/orm/lib/Doctrine/ORM/Cache/CollectionCacheKey.php',
							"CollectionHydrator" => 'doctrine/orm/lib/Doctrine/ORM/Cache/CollectionHydrator.php',
							"ConcurrentRegion" => 'doctrine/orm/lib/Doctrine/ORM/Cache/ConcurrentRegion.php',
							"DefaultCache" => 'doctrine/orm/lib/Doctrine/ORM/Cache/DefaultCache.php',
							"DefaultCacheFactory" => 'doctrine/orm/lib/Doctrine/ORM/Cache/DefaultCacheFactory.php',
							"DefaultCollectionHydrator" => 'doctrine/orm/lib/Doctrine/ORM/Cache/DefaultCollectionHydrator.php',
							"DefaultEntityHydrator" => 'doctrine/orm/lib/Doctrine/ORM/Cache/DefaultEntityHydrator.php',
							"DefaultQueryCache" => 'doctrine/orm/lib/Doctrine/ORM/Cache/DefaultQueryCache.php',
							"EntityCacheEntry" => 'doctrine/orm/lib/Doctrine/ORM/Cache/EntityCacheEntry.php',
							"EntityCacheKey" => 'doctrine/orm/lib/Doctrine/ORM/Cache/EntityCacheKey.php',
							"EntityHydrator" => 'doctrine/orm/lib/Doctrine/ORM/Cache/EntityHydrator.php',
							"Lock" => 'doctrine/orm/lib/Doctrine/ORM/Cache/Lock.php',
							"LockException" => 'doctrine/orm/lib/Doctrine/ORM/Cache/LockException.php',
							"MultiGetRegion" => 'doctrine/orm/lib/Doctrine/ORM/Cache/MultiGetRegion.php',
							"QueryCache" => 'doctrine/orm/lib/Doctrine/ORM/Cache/QueryCache.php',
							"QueryCacheEntry" => 'doctrine/orm/lib/Doctrine/ORM/Cache/QueryCacheEntry.php',
							"QueryCacheKey" => 'doctrine/orm/lib/Doctrine/ORM/Cache/QueryCacheKey.php',
							"QueryCacheValidator" => 'doctrine/orm/lib/Doctrine/ORM/Cache/QueryCacheValidator.php',
							"Region" => 'doctrine/orm/lib/Doctrine/ORM/Cache/Region.php',
							"RegionsConfiguration" => 'doctrine/orm/lib/Doctrine/ORM/Cache/RegionsConfiguration.php',
							"TimestampCacheEntry" => 'doctrine/orm/lib/Doctrine/ORM/Cache/TimestampCacheEntry.php',
							"TimestampCacheKey" => 'doctrine/orm/lib/Doctrine/ORM/Cache/TimestampCacheKey.php',
							"TimestampQueryCacheValidator" => 'doctrine/orm/lib/Doctrine/ORM/Cache/TimestampQueryCacheValidator.php',
							"TimestampRegion" => 'doctrine/orm/lib/Doctrine/ORM/Cache/TimestampRegion.php',
						],
					],
					"Decorator" => [
						"_Items" => [
							"EntityManagerDecorator" => 'doctrine/orm/lib/Doctrine/ORM/Decorator/EntityManagerDecorator.php',
						],
					],
					"Event" => [
						"_Items" => [
							"LifecycleEventArgs" => 'doctrine/orm/lib/Doctrine/ORM/Event/LifecycleEventArgs.php',
							"ListenersInvoker" => 'doctrine/orm/lib/Doctrine/ORM/Event/ListenersInvoker.php',
							"LoadClassMetadataEventArgs" => 'doctrine/orm/lib/Doctrine/ORM/Event/LoadClassMetadataEventArgs.php',
							"OnClassMetadataNotFoundEventArgs" => 'doctrine/orm/lib/Doctrine/ORM/Event/OnClassMetadataNotFoundEventArgs.php',
							"OnClearEventArgs" => 'doctrine/orm/lib/Doctrine/ORM/Event/OnClearEventArgs.php',
							"OnFlushEventArgs" => 'doctrine/orm/lib/Doctrine/ORM/Event/OnFlushEventArgs.php',
							"PostFlushEventArgs" => 'doctrine/orm/lib/Doctrine/ORM/Event/PostFlushEventArgs.php',
							"PreFlushEventArgs" => 'doctrine/orm/lib/Doctrine/ORM/Event/PreFlushEventArgs.php',
							"PreUpdateEventArgs" => 'doctrine/orm/lib/Doctrine/ORM/Event/PreUpdateEventArgs.php',
						],
					],
					"Id" => [
						"_Items" => [
							"AbstractIdGenerator" => 'doctrine/orm/lib/Doctrine/ORM/Id/AbstractIdGenerator.php',
							"AssignedGenerator" => 'doctrine/orm/lib/Doctrine/ORM/Id/AssignedGenerator.php',
							"BigIntegerIdentityGenerator" => 'doctrine/orm/lib/Doctrine/ORM/Id/BigIntegerIdentityGenerator.php',
							"IdentityGenerator" => 'doctrine/orm/lib/Doctrine/ORM/Id/IdentityGenerator.php',
							"SequenceGenerator" => 'doctrine/orm/lib/Doctrine/ORM/Id/SequenceGenerator.php',
							"TableGenerator" => 'doctrine/orm/lib/Doctrine/ORM/Id/TableGenerator.php',
							"UuidGenerator" => 'doctrine/orm/lib/Doctrine/ORM/Id/UuidGenerator.php',
						],
					],
					"Internal" => [
						"Hydration" => [
							"_Items" => [
								"AbstractHydrator" => 'doctrine/orm/lib/Doctrine/ORM/Internal/Hydration/AbstractHydrator.php',
								"ArrayHydrator" => 'doctrine/orm/lib/Doctrine/ORM/Internal/Hydration/ArrayHydrator.php',
								"HydrationException" => 'doctrine/orm/lib/Doctrine/ORM/Internal/Hydration/HydrationException.php',
								"IterableResult" => 'doctrine/orm/lib/Doctrine/ORM/Internal/Hydration/IterableResult.php',
								"ObjectHydrator" => 'doctrine/orm/lib/Doctrine/ORM/Internal/Hydration/ObjectHydrator.php',
								"ScalarHydrator" => 'doctrine/orm/lib/Doctrine/ORM/Internal/Hydration/ScalarHydrator.php',
								"SimpleObjectHydrator" => 'doctrine/orm/lib/Doctrine/ORM/Internal/Hydration/SimpleObjectHydrator.php',
								"SingleScalarHydrator" => 'doctrine/orm/lib/Doctrine/ORM/Internal/Hydration/SingleScalarHydrator.php',
							],
						],
						"_Items" => [
							"CommitOrderCalculator" => 'doctrine/orm/lib/Doctrine/ORM/Internal/CommitOrderCalculator.php',
							"HydrationCompleteHandler" => 'doctrine/orm/lib/Doctrine/ORM/Internal/HydrationCompleteHandler.php',
						],
					],
					"Mapping" => [
						"Builder" => [
							"_Items" => [
								"AssociationBuilder" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/AssociationBuilder.php',
								"ClassMetadataBuilder" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/ClassMetadataBuilder.php',
								"EmbeddedBuilder" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/EmbeddedBuilder.php',
								"EntityListenerBuilder" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/EntityListenerBuilder.php',
								"FieldBuilder" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/FieldBuilder.php',
								"ManyToManyAssociationBuilder" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/ManyToManyAssociationBuilder.php',
								"OneToManyAssociationBuilder" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/OneToManyAssociationBuilder.php',
							],
						],
						"Driver" => [
							"_Items" => [
								"AnnotationDriver" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php',
								"DatabaseDriver" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/DatabaseDriver.php',
								"DriverChain" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/DriverChain.php',
								"PHPDriver" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/PHPDriver.php',
								"SimplifiedXmlDriver" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/SimplifiedXmlDriver.php',
								"SimplifiedYamlDriver" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/SimplifiedYamlDriver.php',
								"StaticPHPDriver" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/StaticPHPDriver.php',
								"XmlDriver" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/XmlDriver.php',
								"YamlDriver" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/YamlDriver.php',
							],
						],
						"Reflection" => [
							"_Items" => [
								"ReflectionPropertiesGetter" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Reflection/ReflectionPropertiesGetter.php',
							],
						],
						"_Items" => [
							"Annotation" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Annotation.php',
							"AnsiQuoteStrategy" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/AnsiQuoteStrategy.php',
							"AssociationOverride" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/AssociationOverride.php',
							"AssociationOverrides" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/AssociationOverrides.php',
							"AttributeOverride" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/AttributeOverride.php',
							"AttributeOverrides" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/AttributeOverrides.php',
							"Cache" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Cache.php',
							"ChangeTrackingPolicy" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/ChangeTrackingPolicy.php',
							"ClassMetadata" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/ClassMetadata.php',
							"ClassMetadataFactory" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/ClassMetadataFactory.php',
							"ClassMetadataInfo" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/ClassMetadataInfo.php',
							"Column" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Column.php',
							"ColumnResult" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/ColumnResult.php',
							"CustomIdGenerator" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/CustomIdGenerator.php',
							"DefaultEntityListenerResolver" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultEntityListenerResolver.php',
							"DefaultNamingStrategy" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultNamingStrategy.php',
							"DefaultQuoteStrategy" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php',
							"DiscriminatorColumn" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/DiscriminatorColumn.php',
							"DiscriminatorMap" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/DiscriminatorMap.php',
							"Embeddable" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Embeddable.php',
							"Embedded" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Embedded.php',
							"Entity" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Entity.php',
							"EntityListenerResolver" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php',
							"EntityListeners" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListeners.php',
							"EntityResult" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/EntityResult.php',
							"FieldResult" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/FieldResult.php',
							"GeneratedValue" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/GeneratedValue.php',
							"HasLifecycleCallbacks" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/HasLifecycleCallbacks.php',
							"Id" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Id.php',
							"Index" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Index.php',
							"InheritanceType" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/InheritanceType.php',
							"JoinColumn" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/JoinColumn.php',
							"JoinColumns" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/JoinColumns.php',
							"JoinTable" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/JoinTable.php',
							"ManyToMany" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/ManyToMany.php',
							"ManyToOne" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/ManyToOne.php',
							"MappedSuperclass" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/MappedSuperclass.php',
							"MappingException" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/MappingException.php',
							"NamedNativeQueries" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/NamedNativeQueries.php',
							"NamedNativeQuery" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/NamedNativeQuery.php',
							"NamedQueries" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/NamedQueries.php',
							"NamedQuery" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/NamedQuery.php',
							"NamingStrategy" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php',
							"OneToMany" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/OneToMany.php',
							"OneToOne" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/OneToOne.php',
							"OrderBy" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/OrderBy.php',
							"PostLoad" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/PostLoad.php',
							"PostPersist" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/PostPersist.php',
							"PostRemove" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/PostRemove.php',
							"PostUpdate" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/PostUpdate.php',
							"PreFlush" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/PreFlush.php',
							"PrePersist" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/PrePersist.php',
							"PreRemove" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/PreRemove.php',
							"PreUpdate" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/PreUpdate.php',
							"QuoteStrategy" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php',
							"ReflectionEmbeddedProperty" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/ReflectionEmbeddedProperty.php',
							"SequenceGenerator" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/SequenceGenerator.php',
							"SqlResultSetMapping" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/SqlResultSetMapping.php',
							"SqlResultSetMappings" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/SqlResultSetMappings.php',
							"Table" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Table.php',
							"UnderscoreNamingStrategy" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php',
							"UniqueConstraint" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/UniqueConstraint.php',
							"Version" => 'doctrine/orm/lib/Doctrine/ORM/Mapping/Version.php',
						],
					],
					"Persisters" => [
						"Collection" => [
							"_Items" => [
								"AbstractCollectionPersister" => 'doctrine/orm/lib/Doctrine/ORM/Persisters/Collection/AbstractCollectionPersister.php',
								"CollectionPersister" => 'doctrine/orm/lib/Doctrine/ORM/Persisters/Collection/CollectionPersister.php',
								"ManyToManyPersister" => 'doctrine/orm/lib/Doctrine/ORM/Persisters/Collection/ManyToManyPersister.php',
								"OneToManyPersister" => 'doctrine/orm/lib/Doctrine/ORM/Persisters/Collection/OneToManyPersister.php',
							],
						],
						"Entity" => [
							"_Items" => [
								"AbstractEntityInheritancePersister" => 'doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/AbstractEntityInheritancePersister.php',
								"BasicEntityPersister" => 'doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/BasicEntityPersister.php',
								"CachedPersisterContext" => 'doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/CachedPersisterContext.php',
								"EntityPersister" => 'doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/EntityPersister.php',
								"JoinedSubclassPersister" => 'doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/JoinedSubclassPersister.php',
								"SingleTablePersister" => 'doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/SingleTablePersister.php',
							],
						],
						"_Items" => [
							"PersisterException" => 'doctrine/orm/lib/Doctrine/ORM/Persisters/PersisterException.php',
							"SqlExpressionVisitor" => 'doctrine/orm/lib/Doctrine/ORM/Persisters/SqlExpressionVisitor.php',
							"SqlValueVisitor" => 'doctrine/orm/lib/Doctrine/ORM/Persisters/SqlValueVisitor.php',
						],
					],
					"Proxy" => [
						"_Items" => [
							"Autoloader" => 'doctrine/orm/lib/Doctrine/ORM/Proxy/Autoloader.php',
							"Proxy" => 'doctrine/orm/lib/Doctrine/ORM/Proxy/Proxy.php',
							"ProxyFactory" => 'doctrine/orm/lib/Doctrine/ORM/Proxy/ProxyFactory.php',
						],
					],
					"Query" => [
						"AST" => [
							"Functions" => [
								"_Items" => [
									"AbsFunction" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/AbsFunction.php',
									"AvgFunction" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/AvgFunction.php',
									"BitAndFunction" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/BitAndFunction.php',
									"BitOrFunction" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/BitOrFunction.php',
									"ConcatFunction" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/ConcatFunction.php',
									"CountFunction" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/CountFunction.php',
									"CurrentDateFunction" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/CurrentDateFunction.php',
									"CurrentTimeFunction" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/CurrentTimeFunction.php',
									"CurrentTimestampFunction" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/CurrentTimestampFunction.php',
									"DateAddFunction" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/DateAddFunction.php',
									"DateDiffFunction" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/DateDiffFunction.php',
									"DateSubFunction" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/DateSubFunction.php',
									"FunctionNode" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/FunctionNode.php',
									"IdentityFunction" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/IdentityFunction.php',
									"LengthFunction" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/LengthFunction.php',
									"LocateFunction" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/LocateFunction.php',
									"LowerFunction" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/LowerFunction.php',
									"MaxFunction" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/MaxFunction.php',
									"MinFunction" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/MinFunction.php',
									"ModFunction" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/ModFunction.php',
									"SizeFunction" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/SizeFunction.php',
									"SqrtFunction" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/SqrtFunction.php',
									"SubstringFunction" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/SubstringFunction.php',
									"SumFunction" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/SumFunction.php',
									"TrimFunction" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/TrimFunction.php',
									"UpperFunction" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/UpperFunction.php',
								],
							],
							"_Items" => [
								"AggregateExpression" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/AggregateExpression.php',
								"ArithmeticExpression" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/ArithmeticExpression.php',
								"ArithmeticFactor" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/ArithmeticFactor.php',
								"ArithmeticTerm" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/ArithmeticTerm.php',
								"ASTException" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/ASTException.php',
								"BetweenExpression" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/BetweenExpression.php',
								"CoalesceExpression" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/CoalesceExpression.php',
								"CollectionMemberExpression" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/CollectionMemberExpression.php',
								"ComparisonExpression" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/ComparisonExpression.php',
								"ConditionalExpression" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/ConditionalExpression.php',
								"ConditionalFactor" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/ConditionalFactor.php',
								"ConditionalPrimary" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/ConditionalPrimary.php',
								"ConditionalTerm" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/ConditionalTerm.php',
								"DeleteClause" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/DeleteClause.php',
								"DeleteStatement" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/DeleteStatement.php',
								"EmptyCollectionComparisonExpression" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/EmptyCollectionComparisonExpression.php',
								"ExistsExpression" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/ExistsExpression.php',
								"FromClause" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/FromClause.php',
								"GeneralCaseExpression" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/GeneralCaseExpression.php',
								"GroupByClause" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/GroupByClause.php',
								"HavingClause" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/HavingClause.php',
								"IdentificationVariableDeclaration" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/IdentificationVariableDeclaration.php',
								"IndexBy" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/IndexBy.php',
								"InExpression" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/InExpression.php',
								"InputParameter" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/InputParameter.php',
								"InstanceOfExpression" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/InstanceOfExpression.php',
								"Join" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Join.php',
								"JoinAssociationDeclaration" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/JoinAssociationDeclaration.php',
								"JoinAssociationPathExpression" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/JoinAssociationPathExpression.php',
								"JoinClassPathExpression" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/JoinClassPathExpression.php',
								"JoinVariableDeclaration" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/JoinVariableDeclaration.php',
								"LikeExpression" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/LikeExpression.php',
								"Literal" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Literal.php',
								"NewObjectExpression" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/NewObjectExpression.php',
								"Node" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Node.php',
								"NullComparisonExpression" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/NullComparisonExpression.php',
								"NullIfExpression" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/NullIfExpression.php',
								"OrderByClause" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/OrderByClause.php',
								"OrderByItem" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/OrderByItem.php',
								"ParenthesisExpression" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/ParenthesisExpression.php',
								"PartialObjectExpression" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/PartialObjectExpression.php',
								"PathExpression" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/PathExpression.php',
								"QuantifiedExpression" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/QuantifiedExpression.php',
								"RangeVariableDeclaration" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/RangeVariableDeclaration.php',
								"SelectClause" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/SelectClause.php',
								"SelectExpression" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/SelectExpression.php',
								"SelectStatement" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/SelectStatement.php',
								"SimpleArithmeticExpression" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/SimpleArithmeticExpression.php',
								"SimpleCaseExpression" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/SimpleCaseExpression.php',
								"SimpleSelectClause" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/SimpleSelectClause.php',
								"SimpleSelectExpression" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/SimpleSelectExpression.php',
								"SimpleWhenClause" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/SimpleWhenClause.php',
								"Subselect" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/Subselect.php',
								"SubselectFromClause" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/SubselectFromClause.php',
								"SubselectIdentificationVariableDeclaration" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/SubselectIdentificationVariableDeclaration.php',
								"UpdateClause" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/UpdateClause.php',
								"UpdateItem" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/UpdateItem.php',
								"UpdateStatement" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/UpdateStatement.php',
								"WhenClause" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/WhenClause.php',
								"WhereClause" => 'doctrine/orm/lib/Doctrine/ORM/Query/AST/WhereClause.php',
							],
						],
						"Exec" => [
							"_Items" => [
								"AbstractSqlExecutor" => 'doctrine/orm/lib/Doctrine/ORM/Query/Exec/AbstractSqlExecutor.php',
								"MultiTableDeleteExecutor" => 'doctrine/orm/lib/Doctrine/ORM/Query/Exec/MultiTableDeleteExecutor.php',
								"MultiTableUpdateExecutor" => 'doctrine/orm/lib/Doctrine/ORM/Query/Exec/MultiTableUpdateExecutor.php',
								"SingleSelectExecutor" => 'doctrine/orm/lib/Doctrine/ORM/Query/Exec/SingleSelectExecutor.php',
								"SingleTableDeleteUpdateExecutor" => 'doctrine/orm/lib/Doctrine/ORM/Query/Exec/SingleTableDeleteUpdateExecutor.php',
							],
						],
						"Expr" => [
							"_Items" => [
								"Andx" => 'doctrine/orm/lib/Doctrine/ORM/Query/Expr/Andx.php',
								"Base" => 'doctrine/orm/lib/Doctrine/ORM/Query/Expr/Base.php',
								"Comparison" => 'doctrine/orm/lib/Doctrine/ORM/Query/Expr/Comparison.php',
								"Composite" => 'doctrine/orm/lib/Doctrine/ORM/Query/Expr/Composite.php',
								"From" => 'doctrine/orm/lib/Doctrine/ORM/Query/Expr/From.php',
								"Func" => 'doctrine/orm/lib/Doctrine/ORM/Query/Expr/Func.php',
								"GroupBy" => 'doctrine/orm/lib/Doctrine/ORM/Query/Expr/GroupBy.php',
								"Join" => 'doctrine/orm/lib/Doctrine/ORM/Query/Expr/Join.php',
								"Literal" => 'doctrine/orm/lib/Doctrine/ORM/Query/Expr/Literal.php',
								"Math" => 'doctrine/orm/lib/Doctrine/ORM/Query/Expr/Math.php',
								"OrderBy" => 'doctrine/orm/lib/Doctrine/ORM/Query/Expr/OrderBy.php',
								"Orx" => 'doctrine/orm/lib/Doctrine/ORM/Query/Expr/Orx.php',
								"Select" => 'doctrine/orm/lib/Doctrine/ORM/Query/Expr/Select.php',
							],
						],
						"Filter" => [
							"_Items" => [
								"SQLFilter" => 'doctrine/orm/lib/Doctrine/ORM/Query/Filter/SQLFilter.php',
							],
						],
						"_Items" => [
							"Expr" => 'doctrine/orm/lib/Doctrine/ORM/Query/Expr.php',
							"FilterCollection" => 'doctrine/orm/lib/Doctrine/ORM/Query/FilterCollection.php',
							"Lexer" => 'doctrine/orm/lib/Doctrine/ORM/Query/Lexer.php',
							"Parameter" => 'doctrine/orm/lib/Doctrine/ORM/Query/Parameter.php',
							"ParameterTypeInferer" => 'doctrine/orm/lib/Doctrine/ORM/Query/ParameterTypeInferer.php',
							"Parser" => 'doctrine/orm/lib/Doctrine/ORM/Query/Parser.php',
							"ParserResult" => 'doctrine/orm/lib/Doctrine/ORM/Query/ParserResult.php',
							"Printer" => 'doctrine/orm/lib/Doctrine/ORM/Query/Printer.php',
							"QueryException" => 'doctrine/orm/lib/Doctrine/ORM/Query/QueryException.php',
							"QueryExpressionVisitor" => 'doctrine/orm/lib/Doctrine/ORM/Query/QueryExpressionVisitor.php',
							"ResultSetMapping" => 'doctrine/orm/lib/Doctrine/ORM/Query/ResultSetMapping.php',
							"ResultSetMappingBuilder" => 'doctrine/orm/lib/Doctrine/ORM/Query/ResultSetMappingBuilder.php',
							"SqlWalker" => 'doctrine/orm/lib/Doctrine/ORM/Query/SqlWalker.php',
							"TreeWalker" => 'doctrine/orm/lib/Doctrine/ORM/Query/TreeWalker.php',
							"TreeWalkerAdapter" => 'doctrine/orm/lib/Doctrine/ORM/Query/TreeWalkerAdapter.php',
							"TreeWalkerChain" => 'doctrine/orm/lib/Doctrine/ORM/Query/TreeWalkerChain.php',
							"TreeWalkerChainIterator" => 'doctrine/orm/lib/Doctrine/ORM/Query/TreeWalkerChainIterator.php',
						],
					],
					"Repository" => [
						"_Items" => [
							"DefaultRepositoryFactory" => 'doctrine/orm/lib/Doctrine/ORM/Repository/DefaultRepositoryFactory.php',
							"RepositoryFactory" => 'doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php',
						],
					],
					"Tools" => [
						"Console" => [
							"Command" => [
								"ClearCache" => [
									"_Items" => [
										"CollectionRegionCommand" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/CollectionRegionCommand.php',
										"EntityRegionCommand" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/EntityRegionCommand.php',
										"MetadataCommand" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/MetadataCommand.php',
										"QueryCommand" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/QueryCommand.php',
										"QueryRegionCommand" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/QueryRegionCommand.php',
										"ResultCommand" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/ResultCommand.php',
									],
								],
								"SchemaTool" => [
									"_Items" => [
										"AbstractCommand" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/AbstractCommand.php',
										"CreateCommand" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/CreateCommand.php',
										"DropCommand" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/DropCommand.php',
										"UpdateCommand" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/UpdateCommand.php',
									],
								],
								"_Items" => [
									"ConvertDoctrine1SchemaCommand" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ConvertDoctrine1SchemaCommand.php',
									"ConvertMappingCommand" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ConvertMappingCommand.php',
									"EnsureProductionSettingsCommand" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/EnsureProductionSettingsCommand.php',
									"GenerateEntitiesCommand" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/GenerateEntitiesCommand.php',
									"GenerateProxiesCommand" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/GenerateProxiesCommand.php',
									"GenerateRepositoriesCommand" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/GenerateRepositoriesCommand.php',
									"InfoCommand" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/InfoCommand.php',
									"MappingDescribeCommand" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/MappingDescribeCommand.php',
									"RunDqlCommand" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/RunDqlCommand.php',
									"ValidateSchemaCommand" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ValidateSchemaCommand.php',
								],
							],
							"Helper" => [
								"_Items" => [
									"EntityManagerHelper" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Console/Helper/EntityManagerHelper.php',
								],
							],
							"_Items" => [
								"ConsoleRunner" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Console/ConsoleRunner.php',
								"MetadataFilter" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Console/MetadataFilter.php',
							],
						],
						"Event" => [
							"_Items" => [
								"GenerateSchemaEventArgs" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Event/GenerateSchemaEventArgs.php',
								"GenerateSchemaTableEventArgs" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Event/GenerateSchemaTableEventArgs.php',
							],
						],
						"Export" => [
							"Driver" => [
								"_Items" => [
									"AbstractExporter" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Export/Driver/AbstractExporter.php',
									"AnnotationExporter" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Export/Driver/AnnotationExporter.php',
									"PhpExporter" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Export/Driver/PhpExporter.php',
									"XmlExporter" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Export/Driver/XmlExporter.php',
									"YamlExporter" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Export/Driver/YamlExporter.php',
								],
							],
							"_Items" => [
								"ClassMetadataExporter" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Export/ClassMetadataExporter.php',
								"ExportException" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Export/ExportException.php',
							],
						],
						"Pagination" => [
							"_Items" => [
								"CountOutputWalker" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/CountOutputWalker.php',
								"CountWalker" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/CountWalker.php',
								"LimitSubqueryOutputWalker" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/LimitSubqueryOutputWalker.php',
								"LimitSubqueryWalker" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/LimitSubqueryWalker.php',
								"Paginator" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/Paginator.php',
								"RowNumberOverFunction" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/RowNumberOverFunction.php',
								"WhereInWalker" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/WhereInWalker.php',
							],
						],
						"_Items" => [
							"AttachEntityListenersListener" => 'doctrine/orm/lib/Doctrine/ORM/Tools/AttachEntityListenersListener.php',
							"ConvertDoctrine1Schema" => 'doctrine/orm/lib/Doctrine/ORM/Tools/ConvertDoctrine1Schema.php',
							"DebugUnitOfWorkListener" => 'doctrine/orm/lib/Doctrine/ORM/Tools/DebugUnitOfWorkListener.php',
							"DisconnectedClassMetadataFactory" => 'doctrine/orm/lib/Doctrine/ORM/Tools/DisconnectedClassMetadataFactory.php',
							"EntityGenerator" => 'doctrine/orm/lib/Doctrine/ORM/Tools/EntityGenerator.php',
							"EntityRepositoryGenerator" => 'doctrine/orm/lib/Doctrine/ORM/Tools/EntityRepositoryGenerator.php',
							"ResolveTargetEntityListener" => 'doctrine/orm/lib/Doctrine/ORM/Tools/ResolveTargetEntityListener.php',
							"SchemaTool" => 'doctrine/orm/lib/Doctrine/ORM/Tools/SchemaTool.php',
							"SchemaValidator" => 'doctrine/orm/lib/Doctrine/ORM/Tools/SchemaValidator.php',
							"Setup" => 'doctrine/orm/lib/Doctrine/ORM/Tools/Setup.php',
							"ToolEvents" => 'doctrine/orm/lib/Doctrine/ORM/Tools/ToolEvents.php',
							"ToolsException" => 'doctrine/orm/lib/Doctrine/ORM/Tools/ToolsException.php',
						],
					],
					"Utility" => [
						"_Items" => [
							"HierarchyDiscriminatorResolver" => 'doctrine/orm/lib/Doctrine/ORM/Utility/HierarchyDiscriminatorResolver.php',
							"IdentifierFlattener" => 'doctrine/orm/lib/Doctrine/ORM/Utility/IdentifierFlattener.php',
							"PersisterHelper" => 'doctrine/orm/lib/Doctrine/ORM/Utility/PersisterHelper.php',
						],
					],
					"_Items" => [
						"AbstractQuery" => 'doctrine/orm/lib/Doctrine/ORM/AbstractQuery.php',
						"Cache" => 'doctrine/orm/lib/Doctrine/ORM/Cache.php',
						"Configuration" => 'doctrine/orm/lib/Doctrine/ORM/Configuration.php',
						"EntityManager" => 'doctrine/orm/lib/Doctrine/ORM/EntityManager.php',
						"EntityManagerInterface" => 'doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php',
						"EntityNotFoundException" => 'doctrine/orm/lib/Doctrine/ORM/EntityNotFoundException.php',
						"EntityRepository" => 'doctrine/orm/lib/Doctrine/ORM/EntityRepository.php',
						"Events" => 'doctrine/orm/lib/Doctrine/ORM/Events.php',
						"LazyCriteriaCollection" => 'doctrine/orm/lib/Doctrine/ORM/LazyCriteriaCollection.php',
						"NativeQuery" => 'doctrine/orm/lib/Doctrine/ORM/NativeQuery.php',
						"NonUniqueResultException" => 'doctrine/orm/lib/Doctrine/ORM/NonUniqueResultException.php',
						"NoResultException" => 'doctrine/orm/lib/Doctrine/ORM/NoResultException.php',
						"OptimisticLockException" => 'doctrine/orm/lib/Doctrine/ORM/OptimisticLockException.php',
						"ORMException" => 'doctrine/orm/lib/Doctrine/ORM/ORMException.php',
						"ORMInvalidArgumentException" => 'doctrine/orm/lib/Doctrine/ORM/ORMInvalidArgumentException.php',
						"PersistentCollection" => 'doctrine/orm/lib/Doctrine/ORM/PersistentCollection.php',
						"PessimisticLockException" => 'doctrine/orm/lib/Doctrine/ORM/PessimisticLockException.php',
						"Query" => 'doctrine/orm/lib/Doctrine/ORM/Query.php',
						"QueryBuilder" => 'doctrine/orm/lib/Doctrine/ORM/QueryBuilder.php',
						"TransactionRequiredException" => 'doctrine/orm/lib/Doctrine/ORM/TransactionRequiredException.php',
						"UnexpectedResultException" => 'doctrine/orm/lib/Doctrine/ORM/UnexpectedResultException.php',
						"UnitOfWork" => 'doctrine/orm/lib/Doctrine/ORM/UnitOfWork.php',
						"Version" => 'doctrine/orm/lib/Doctrine/ORM/Version.php',
					],
				],
				"_Items" => [
				],
			],
			"Evenement" => [
				"_Items" => [
					"EventEmitter" => 'evenement/evenement/src/Evenement/EventEmitter.php',
					"EventEmitterInterface" => 'evenement/evenement/src/Evenement/EventEmitterInterface.php',
					"EventEmitterTrait" => 'evenement/evenement/src/Evenement/EventEmitterTrait.php',
				],
			],
			"LINE" => [
				"LINEBot" => [
					"EchoBot" => [
						"_Items" => [
							"Dependency" => 'linecorp/line-bot-sdk/examples/EchoBot/src/LINEBot/EchoBot/Dependency.php',
							"Route" => 'linecorp/line-bot-sdk/examples/EchoBot/src/LINEBot/EchoBot/Route.php',
							"Setting" => 'linecorp/line-bot-sdk/examples/EchoBot/src/LINEBot/EchoBot/Setting.php',
						],
					],
					"KitchenSink" => [
						"EventHandler" => [
							"MessageHandler" => [
								"Flex" => [
									"_Items" => [
										"FlexSampleRestaurant" => 'linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/MessageHandler/Flex/FlexSampleRestaurant.php',
										"FlexSampleShopping" => 'linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/MessageHandler/Flex/FlexSampleShopping.php',
									],
								],
								"Util" => [
									"_Items" => [
										"UrlBuilder" => 'linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/MessageHandler/Util/UrlBuilder.php',
									],
								],
								"_Items" => [
									"AudioMessageHandler" => 'linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/MessageHandler/AudioMessageHandler.php',
									"ImageMessageHandler" => 'linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/MessageHandler/ImageMessageHandler.php',
									"LocationMessageHandler" => 'linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/MessageHandler/LocationMessageHandler.php',
									"StickerMessageHandler" => 'linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/MessageHandler/StickerMessageHandler.php',
									"TextMessageHandler" => 'linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/MessageHandler/TextMessageHandler.php',
									"VideoMessageHandler" => 'linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/MessageHandler/VideoMessageHandler.php',
								],
							],
							"_Items" => [
								"BeaconEventHandler" => 'linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/BeaconEventHandler.php',
								"FollowEventHandler" => 'linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/FollowEventHandler.php',
								"JoinEventHandler" => 'linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/JoinEventHandler.php',
								"LeaveEventHandler" => 'linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/LeaveEventHandler.php',
								"PostbackEventHandler" => 'linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/PostbackEventHandler.php',
								"ThingsEventHandler" => 'linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/ThingsEventHandler.php',
								"UnfollowEventHandler" => 'linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/UnfollowEventHandler.php',
							],
						],
						"_Items" => [
							"Dependency" => 'linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/Dependency.php',
							"AccountLinkEventHandler" => 'linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/AccountLinkEventHandler.php',
							"EventHandler" => 'linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler.php',
							"Route" => 'linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/Route.php',
							"Setting" => 'linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/Setting.php',
						],
					],
					"Constant" => [
						"Flex" => [
							"_Items" => [
								"BubleContainerSize" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/BubleContainerSize.php',
								"ComponentAlign" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentAlign.php',
								"ComponentBorderWidth" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentBorderWidth.php',
								"ComponentButtonHeight" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentButtonHeight.php',
								"ComponentButtonStyle" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentButtonStyle.php',
								"ComponentFontSize" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentFontSize.php',
								"ComponentFontWeight" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentFontWeight.php',
								"ComponentGravity" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentGravity.php',
								"ComponentIconAspectRatio" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentIconAspectRatio.php',
								"ComponentIconSize" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentIconSize.php',
								"ComponentImageAspectMode" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentImageAspectMode.php',
								"ComponentImageAspectRatio" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentImageAspectRatio.php',
								"ComponentImageSize" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentImageSize.php',
								"ComponentLayout" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentLayout.php',
								"ComponentMargin" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentMargin.php',
								"ComponentPosition" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentPosition.php',
								"ComponentSpaceSize" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentSpaceSize.php',
								"ComponentSpacing" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentSpacing.php',
								"ComponentTextDecoration" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentTextDecoration.php',
								"ComponentTextStyle" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentTextStyle.php',
								"ComponentType" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentType.php',
								"ContainerDirection" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ContainerDirection.php',
								"ContainerType" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ContainerType.php',
							],
						],
						"_Items" => [
							"ActionType" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/ActionType.php',
							"EventSourceType" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/EventSourceType.php',
							"HTTPHeader" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/HTTPHeader.php',
							"MessageContentProviderType" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/MessageContentProviderType.php',
							"MessageType" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/MessageType.php',
							"Meta" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/Meta.php',
							"TemplateType" => 'linecorp/line-bot-sdk/src/LINEBot/Constant/TemplateType.php',
						],
					],
					"Event" => [
						"MessageEvent" => [
							"_Items" => [
								"AudioMessage" => 'linecorp/line-bot-sdk/src/LINEBot/Event/MessageEvent/AudioMessage.php',
								"ContentProvider" => 'linecorp/line-bot-sdk/src/LINEBot/Event/MessageEvent/ContentProvider.php',
								"FileMessage" => 'linecorp/line-bot-sdk/src/LINEBot/Event/MessageEvent/FileMessage.php',
								"ImageMessage" => 'linecorp/line-bot-sdk/src/LINEBot/Event/MessageEvent/ImageMessage.php',
								"LocationMessage" => 'linecorp/line-bot-sdk/src/LINEBot/Event/MessageEvent/LocationMessage.php',
								"StickerMessage" => 'linecorp/line-bot-sdk/src/LINEBot/Event/MessageEvent/StickerMessage.php',
								"TextMessage" => 'linecorp/line-bot-sdk/src/LINEBot/Event/MessageEvent/TextMessage.php',
								"UnknownMessage" => 'linecorp/line-bot-sdk/src/LINEBot/Event/MessageEvent/UnknownMessage.php',
								"VideoMessage" => 'linecorp/line-bot-sdk/src/LINEBot/Event/MessageEvent/VideoMessage.php',
							],
						],
						"Parser" => [
							"_Items" => [
								"EventRequestParser" => 'linecorp/line-bot-sdk/src/LINEBot/Event/Parser/EventRequestParser.php',
							],
						],
						"Things" => [
							"_Items" => [
								"ThingsResult" => 'linecorp/line-bot-sdk/src/LINEBot/Event/Things/ThingsResult.php',
								"ThingsResultAction" => 'linecorp/line-bot-sdk/src/LINEBot/Event/Things/ThingsResultAction.php',
							],
						],
						"_Items" => [
							"AccountLinkEvent" => 'linecorp/line-bot-sdk/src/LINEBot/Event/AccountLinkEvent.php',
							"BaseEvent" => 'linecorp/line-bot-sdk/src/LINEBot/Event/BaseEvent.php',
							"BeaconDetectionEvent" => 'linecorp/line-bot-sdk/src/LINEBot/Event/BeaconDetectionEvent.php',
							"FollowEvent" => 'linecorp/line-bot-sdk/src/LINEBot/Event/FollowEvent.php',
							"JoinEvent" => 'linecorp/line-bot-sdk/src/LINEBot/Event/JoinEvent.php',
							"LeaveEvent" => 'linecorp/line-bot-sdk/src/LINEBot/Event/LeaveEvent.php',
							"MemberJoinEvent" => 'linecorp/line-bot-sdk/src/LINEBot/Event/MemberJoinEvent.php',
							"MemberLeaveEvent" => 'linecorp/line-bot-sdk/src/LINEBot/Event/MemberLeaveEvent.php',
							"MessageEvent" => 'linecorp/line-bot-sdk/src/LINEBot/Event/MessageEvent.php',
							"PostbackEvent" => 'linecorp/line-bot-sdk/src/LINEBot/Event/PostbackEvent.php',
							"ThingsEvent" => 'linecorp/line-bot-sdk/src/LINEBot/Event/ThingsEvent.php',
							"UnfollowEvent" => 'linecorp/line-bot-sdk/src/LINEBot/Event/UnfollowEvent.php',
							"UnknownEvent" => 'linecorp/line-bot-sdk/src/LINEBot/Event/UnknownEvent.php',
						],
					],
					"Exception" => [
						"_Items" => [
							"CurlExecutionException" => 'linecorp/line-bot-sdk/src/LINEBot/Exception/CurlExecutionException.php',
							"InvalidEventRequestException" => 'linecorp/line-bot-sdk/src/LINEBot/Exception/InvalidEventRequestException.php',
							"InvalidEventSourceException" => 'linecorp/line-bot-sdk/src/LINEBot/Exception/InvalidEventSourceException.php',
							"InvalidSignatureException" => 'linecorp/line-bot-sdk/src/LINEBot/Exception/InvalidSignatureException.php',
						],
					],
					"HTTPClient" => [
						"_Items" => [
							"Curl" => 'linecorp/line-bot-sdk/src/LINEBot/HTTPClient/Curl.php',
							"CurlHTTPClient" => 'linecorp/line-bot-sdk/src/LINEBot/HTTPClient/CurlHTTPClient.php',
						],
					],
					"ImagemapActionBuilder" => [
						"_Items" => [
							"AreaBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/ImagemapActionBuilder/AreaBuilder.php',
							"ImagemapMessageActionBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/ImagemapActionBuilder/ImagemapMessageActionBuilder.php',
							"ImagemapUriActionBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/ImagemapActionBuilder/ImagemapUriActionBuilder.php',
						],
					],
					"MessageBuilder" => [
						"Flex" => [
							"ComponentBuilder" => [
								"_Items" => [
									"BoxComponentBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/ComponentBuilder/BoxComponentBuilder.php',
									"ButtonComponentBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/ComponentBuilder/ButtonComponentBuilder.php',
									"FillerComponentBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/ComponentBuilder/FillerComponentBuilder.php',
									"IconComponentBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/ComponentBuilder/IconComponentBuilder.php',
									"ImageComponentBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/ComponentBuilder/ImageComponentBuilder.php',
									"SeparatorComponentBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/ComponentBuilder/SeparatorComponentBuilder.php',
									"SpacerComponentBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/ComponentBuilder/SpacerComponentBuilder.php',
									"SpanComponentBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/ComponentBuilder/SpanComponentBuilder.php',
									"TextComponentBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/ComponentBuilder/TextComponentBuilder.php',
								],
							],
							"ContainerBuilder" => [
								"_Items" => [
									"BubbleContainerBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/ContainerBuilder/BubbleContainerBuilder.php',
									"CarouselContainerBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/ContainerBuilder/CarouselContainerBuilder.php',
								],
							],
							"_Items" => [
								"BlockStyleBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/BlockStyleBuilder.php',
								"BubbleStylesBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/BubbleStylesBuilder.php',
								"ComponentBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/ComponentBuilder.php',
								"ContainerBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/ContainerBuilder.php',
							],
						],
						"Imagemap" => [
							"_Items" => [
								"BaseSizeBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Imagemap/BaseSizeBuilder.php',
								"ExternalLinkBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Imagemap/ExternalLinkBuilder.php',
								"VideoBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Imagemap/VideoBuilder.php',
							],
						],
						"TemplateBuilder" => [
							"_Items" => [
								"ButtonTemplateBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/TemplateBuilder/ButtonTemplateBuilder.php',
								"CarouselColumnTemplateBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/TemplateBuilder/CarouselColumnTemplateBuilder.php',
								"CarouselTemplateBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/TemplateBuilder/CarouselTemplateBuilder.php',
								"ConfirmTemplateBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/TemplateBuilder/ConfirmTemplateBuilder.php',
								"ImageCarouselColumnTemplateBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/TemplateBuilder/ImageCarouselColumnTemplateBuilder.php',
								"ImageCarouselTemplateBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/TemplateBuilder/ImageCarouselTemplateBuilder.php',
							],
						],
						"_Items" => [
							"AudioMessageBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/AudioMessageBuilder.php',
							"FlexMessageBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/FlexMessageBuilder.php',
							"ImagemapMessageBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/ImagemapMessageBuilder.php',
							"ImageMessageBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/ImageMessageBuilder.php',
							"LocationMessageBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/LocationMessageBuilder.php',
							"MultiMessageBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/MultiMessageBuilder.php',
							"RawMessageBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/RawMessageBuilder.php',
							"StickerMessageBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/StickerMessageBuilder.php',
							"TemplateBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/TemplateBuilder.php',
							"TemplateMessageBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/TemplateMessageBuilder.php',
							"TextMessageBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/TextMessageBuilder.php',
							"VideoMessageBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/VideoMessageBuilder.php',
						],
					],
					"QuickReplyBuilder" => [
						"ButtonBuilder" => [
							"_Items" => [
								"QuickReplyButtonBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/QuickReplyBuilder/ButtonBuilder/QuickReplyButtonBuilder.php',
							],
						],
						"_Items" => [
							"QuickReplyButtonBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/QuickReplyBuilder/QuickReplyButtonBuilder.php',
							"QuickReplyMessageBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/QuickReplyBuilder/QuickReplyMessageBuilder.php',
						],
					],
					"RichMenuBuilder" => [
						"_Items" => [
							"RichMenuAreaBoundsBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/RichMenuBuilder/RichMenuAreaBoundsBuilder.php',
							"RichMenuAreaBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/RichMenuBuilder/RichMenuAreaBuilder.php',
							"RichMenuSizeBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/RichMenuBuilder/RichMenuSizeBuilder.php',
						],
					],
					"TemplateActionBuilder" => [
						"Uri" => [
							"_Items" => [
								"AltUriBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/TemplateActionBuilder/Uri/AltUriBuilder.php',
							],
						],
						"_Items" => [
							"CameraRollTemplateActionBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/TemplateActionBuilder/CameraRollTemplateActionBuilder.php',
							"CameraTemplateActionBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/TemplateActionBuilder/CameraTemplateActionBuilder.php',
							"DatetimePickerTemplateActionBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/TemplateActionBuilder/DatetimePickerTemplateActionBuilder.php',
							"LocationTemplateActionBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/TemplateActionBuilder/LocationTemplateActionBuilder.php',
							"MessageTemplateActionBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/TemplateActionBuilder/MessageTemplateActionBuilder.php',
							"PostbackTemplateActionBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/TemplateActionBuilder/PostbackTemplateActionBuilder.php',
							"UriTemplateActionBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/TemplateActionBuilder/UriTemplateActionBuilder.php',
						],
					],
					"Util" => [
						"_Items" => [
							"BuildUtil" => 'linecorp/line-bot-sdk/src/LINEBot/Util/BuildUtil.php',
						],
					],
					"_Items" => [
						"HTTPClient" => 'linecorp/line-bot-sdk/src/LINEBot/HTTPClient.php',
						"ImagemapActionBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/ImagemapActionBuilder.php',
						"MessageBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/MessageBuilder.php',
						"QuickReplyBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/QuickReplyBuilder.php',
						"Response" => 'linecorp/line-bot-sdk/src/LINEBot/Response.php',
						"RichMenuBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/RichMenuBuilder.php',
						"SignatureValidator" => 'linecorp/line-bot-sdk/src/LINEBot/SignatureValidator.php',
						"TemplateActionBuilder" => 'linecorp/line-bot-sdk/src/LINEBot/TemplateActionBuilder.php',
					],
				],
				"_Items" => [
					"LINEBot" => 'linecorp/line-bot-sdk/src/LINEBot.php',
				],
			],
			"malkusch" => [
				"lock" => [
					"exception" => [
						"_Items" => [
							"DeadlineException" => 'malkusch/lock/classes/exception/DeadlineException.php',
							"ExecutionOutsideLockException" => 'malkusch/lock/classes/exception/ExecutionOutsideLockException.php',
							"LockAcquireException" => 'malkusch/lock/classes/exception/LockAcquireException.php',
							"LockReleaseException" => 'malkusch/lock/classes/exception/LockReleaseException.php',
							"MutexException" => 'malkusch/lock/classes/exception/MutexException.php',
							"TimeoutException" => 'malkusch/lock/classes/exception/TimeoutException.php',
						],
					],
					"mutex" => [
						"_Items" => [
							"CASMutex" => 'malkusch/lock/classes/mutex/CASMutex.php',
							"FlockMutex" => 'malkusch/lock/classes/mutex/FlockMutex.php',
							"LockMutex" => 'malkusch/lock/classes/mutex/LockMutex.php',
							"MemcachedMutex" => 'malkusch/lock/classes/mutex/MemcachedMutex.php',
							"Mutex" => 'malkusch/lock/classes/mutex/Mutex.php',
							"MySQLMutex" => 'malkusch/lock/classes/mutex/MySQLMutex.php',
							"NoMutex" => 'malkusch/lock/classes/mutex/NoMutex.php',
							"PgAdvisoryLockMutex" => 'malkusch/lock/classes/mutex/PgAdvisoryLockMutex.php',
							"PHPRedisMutex" => 'malkusch/lock/classes/mutex/PHPRedisMutex.php',
							"PredisMutex" => 'malkusch/lock/classes/mutex/PredisMutex.php',
							"RedisMutex" => 'malkusch/lock/classes/mutex/RedisMutex.php',
							"SemaphoreMutex" => 'malkusch/lock/classes/mutex/SemaphoreMutex.php',
							"SpinlockMutex" => 'malkusch/lock/classes/mutex/SpinlockMutex.php',
							"TransactionalMutex" => 'malkusch/lock/classes/mutex/TransactionalMutex.php',
						],
					],
					"util" => [
						"_Items" => [
							"DoubleCheckedLocking" => 'malkusch/lock/classes/util/DoubleCheckedLocking.php',
							"Loop" => 'malkusch/lock/classes/util/Loop.php',
							"PcntlTimeout" => 'malkusch/lock/classes/util/PcntlTimeout.php',
						],
					],
					"_Items" => [
					],
				],
				"_Items" => [
				],
			],
			"Monolog" => [
				"Formatter" => [
					"_Items" => [
						"ChromePHPFormatter" => 'monolog/monolog/src/Monolog/Formatter/ChromePHPFormatter.php',
						"ElasticaFormatter" => 'monolog/monolog/src/Monolog/Formatter/ElasticaFormatter.php',
						"ElasticsearchFormatter" => 'monolog/monolog/src/Monolog/Formatter/ElasticsearchFormatter.php',
						"FlowdockFormatter" => 'monolog/monolog/src/Monolog/Formatter/FlowdockFormatter.php',
						"FluentdFormatter" => 'monolog/monolog/src/Monolog/Formatter/FluentdFormatter.php',
						"FormatterInterface" => 'monolog/monolog/src/Monolog/Formatter/FormatterInterface.php',
						"GelfMessageFormatter" => 'monolog/monolog/src/Monolog/Formatter/GelfMessageFormatter.php',
						"HtmlFormatter" => 'monolog/monolog/src/Monolog/Formatter/HtmlFormatter.php',
						"JsonFormatter" => 'monolog/monolog/src/Monolog/Formatter/JsonFormatter.php',
						"LineFormatter" => 'monolog/monolog/src/Monolog/Formatter/LineFormatter.php',
						"LogglyFormatter" => 'monolog/monolog/src/Monolog/Formatter/LogglyFormatter.php',
						"LogmaticFormatter" => 'monolog/monolog/src/Monolog/Formatter/LogmaticFormatter.php',
						"LogstashFormatter" => 'monolog/monolog/src/Monolog/Formatter/LogstashFormatter.php',
						"MongoDBFormatter" => 'monolog/monolog/src/Monolog/Formatter/MongoDBFormatter.php',
						"NormalizerFormatter" => 'monolog/monolog/src/Monolog/Formatter/NormalizerFormatter.php',
						"ScalarFormatter" => 'monolog/monolog/src/Monolog/Formatter/ScalarFormatter.php',
						"WildfireFormatter" => 'monolog/monolog/src/Monolog/Formatter/WildfireFormatter.php',
					],
				],
				"Handler" => [
					"Curl" => [
						"_Items" => [
							"Util" => 'monolog/monolog/src/Monolog/Handler/Curl/Util.php',
						],
					],
					"FingersCrossed" => [
						"_Items" => [
							"ActivationStrategyInterface" => 'monolog/monolog/src/Monolog/Handler/FingersCrossed/ActivationStrategyInterface.php',
							"ChannelLevelActivationStrategy" => 'monolog/monolog/src/Monolog/Handler/FingersCrossed/ChannelLevelActivationStrategy.php',
							"ErrorLevelActivationStrategy" => 'monolog/monolog/src/Monolog/Handler/FingersCrossed/ErrorLevelActivationStrategy.php',
						],
					],
					"Slack" => [
						"_Items" => [
							"SlackRecord" => 'monolog/monolog/src/Monolog/Handler/Slack/SlackRecord.php',
						],
					],
					"SyslogUdp" => [
						"_Items" => [
							"UdpSocket" => 'monolog/monolog/src/Monolog/Handler/SyslogUdp/UdpSocket.php',
						],
					],
					"_Items" => [
						"AbstractHandler" => 'monolog/monolog/src/Monolog/Handler/AbstractHandler.php',
						"AbstractProcessingHandler" => 'monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php',
						"AbstractSyslogHandler" => 'monolog/monolog/src/Monolog/Handler/AbstractSyslogHandler.php',
						"AmqpHandler" => 'monolog/monolog/src/Monolog/Handler/AmqpHandler.php',
						"BrowserConsoleHandler" => 'monolog/monolog/src/Monolog/Handler/BrowserConsoleHandler.php',
						"BufferHandler" => 'monolog/monolog/src/Monolog/Handler/BufferHandler.php',
						"ChromePHPHandler" => 'monolog/monolog/src/Monolog/Handler/ChromePHPHandler.php',
						"CouchDBHandler" => 'monolog/monolog/src/Monolog/Handler/CouchDBHandler.php',
						"CubeHandler" => 'monolog/monolog/src/Monolog/Handler/CubeHandler.php',
						"DeduplicationHandler" => 'monolog/monolog/src/Monolog/Handler/DeduplicationHandler.php',
						"DoctrineCouchDBHandler" => 'monolog/monolog/src/Monolog/Handler/DoctrineCouchDBHandler.php',
						"DynamoDbHandler" => 'monolog/monolog/src/Monolog/Handler/DynamoDbHandler.php',
						"ElasticaHandler" => 'monolog/monolog/src/Monolog/Handler/ElasticaHandler.php',
						"ElasticsearchHandler" => 'monolog/monolog/src/Monolog/Handler/ElasticsearchHandler.php',
						"ErrorLogHandler" => 'monolog/monolog/src/Monolog/Handler/ErrorLogHandler.php',
						"FallbackGroupHandler" => 'monolog/monolog/src/Monolog/Handler/FallbackGroupHandler.php',
						"FilterHandler" => 'monolog/monolog/src/Monolog/Handler/FilterHandler.php',
						"FingersCrossedHandler" => 'monolog/monolog/src/Monolog/Handler/FingersCrossedHandler.php',
						"FirePHPHandler" => 'monolog/monolog/src/Monolog/Handler/FirePHPHandler.php',
						"FleepHookHandler" => 'monolog/monolog/src/Monolog/Handler/FleepHookHandler.php',
						"FlowdockHandler" => 'monolog/monolog/src/Monolog/Handler/FlowdockHandler.php',
						"FormattableHandlerInterface" => 'monolog/monolog/src/Monolog/Handler/FormattableHandlerInterface.php',
						"FormattableHandlerTrait" => 'monolog/monolog/src/Monolog/Handler/FormattableHandlerTrait.php',
						"GelfHandler" => 'monolog/monolog/src/Monolog/Handler/GelfHandler.php',
						"GroupHandler" => 'monolog/monolog/src/Monolog/Handler/GroupHandler.php',
						"Handler" => 'monolog/monolog/src/Monolog/Handler/Handler.php',
						"HandlerInterface" => 'monolog/monolog/src/Monolog/Handler/HandlerInterface.php',
						"HandlerWrapper" => 'monolog/monolog/src/Monolog/Handler/HandlerWrapper.php',
						"IFTTTHandler" => 'monolog/monolog/src/Monolog/Handler/IFTTTHandler.php',
						"InsightOpsHandler" => 'monolog/monolog/src/Monolog/Handler/InsightOpsHandler.php',
						"LogEntriesHandler" => 'monolog/monolog/src/Monolog/Handler/LogEntriesHandler.php',
						"LogglyHandler" => 'monolog/monolog/src/Monolog/Handler/LogglyHandler.php',
						"LogmaticHandler" => 'monolog/monolog/src/Monolog/Handler/LogmaticHandler.php',
						"MailHandler" => 'monolog/monolog/src/Monolog/Handler/MailHandler.php',
						"MandrillHandler" => 'monolog/monolog/src/Monolog/Handler/MandrillHandler.php',
						"MissingExtensionException" => 'monolog/monolog/src/Monolog/Handler/MissingExtensionException.php',
						"MongoDBHandler" => 'monolog/monolog/src/Monolog/Handler/MongoDBHandler.php',
						"NativeMailerHandler" => 'monolog/monolog/src/Monolog/Handler/NativeMailerHandler.php',
						"NewRelicHandler" => 'monolog/monolog/src/Monolog/Handler/NewRelicHandler.php',
						"NoopHandler" => 'monolog/monolog/src/Monolog/Handler/NoopHandler.php',
						"NullHandler" => 'monolog/monolog/src/Monolog/Handler/NullHandler.php',
						"OverflowHandler" => 'monolog/monolog/src/Monolog/Handler/OverflowHandler.php',
						"PHPConsoleHandler" => 'monolog/monolog/src/Monolog/Handler/PHPConsoleHandler.php',
						"ProcessableHandlerInterface" => 'monolog/monolog/src/Monolog/Handler/ProcessableHandlerInterface.php',
						"ProcessableHandlerTrait" => 'monolog/monolog/src/Monolog/Handler/ProcessableHandlerTrait.php',
						"ProcessHandler" => 'monolog/monolog/src/Monolog/Handler/ProcessHandler.php',
						"PsrHandler" => 'monolog/monolog/src/Monolog/Handler/PsrHandler.php',
						"PushoverHandler" => 'monolog/monolog/src/Monolog/Handler/PushoverHandler.php',
						"RedisHandler" => 'monolog/monolog/src/Monolog/Handler/RedisHandler.php',
						"RollbarHandler" => 'monolog/monolog/src/Monolog/Handler/RollbarHandler.php',
						"RotatingFileHandler" => 'monolog/monolog/src/Monolog/Handler/RotatingFileHandler.php',
						"SamplingHandler" => 'monolog/monolog/src/Monolog/Handler/SamplingHandler.php',
						"SendGridHandler" => 'monolog/monolog/src/Monolog/Handler/SendGridHandler.php',
						"SlackHandler" => 'monolog/monolog/src/Monolog/Handler/SlackHandler.php',
						"SlackWebhookHandler" => 'monolog/monolog/src/Monolog/Handler/SlackWebhookHandler.php',
						"SocketHandler" => 'monolog/monolog/src/Monolog/Handler/SocketHandler.php',
						"SqsHandler" => 'monolog/monolog/src/Monolog/Handler/SqsHandler.php',
						"StreamHandler" => 'monolog/monolog/src/Monolog/Handler/StreamHandler.php',
						"SwiftMailerHandler" => 'monolog/monolog/src/Monolog/Handler/SwiftMailerHandler.php',
						"SyslogHandler" => 'monolog/monolog/src/Monolog/Handler/SyslogHandler.php',
						"SyslogUdpHandler" => 'monolog/monolog/src/Monolog/Handler/SyslogUdpHandler.php',
						"TelegramBotHandler" => 'monolog/monolog/src/Monolog/Handler/TelegramBotHandler.php',
						"TestHandler" => 'monolog/monolog/src/Monolog/Handler/TestHandler.php',
						"WebRequestRecognizerTrait" => 'monolog/monolog/src/Monolog/Handler/WebRequestRecognizerTrait.php',
						"WhatFailureGroupHandler" => 'monolog/monolog/src/Monolog/Handler/WhatFailureGroupHandler.php',
						"ZendMonitorHandler" => 'monolog/monolog/src/Monolog/Handler/ZendMonitorHandler.php',
					],
				],
				"Processor" => [
					"_Items" => [
						"GitProcessor" => 'monolog/monolog/src/Monolog/Processor/GitProcessor.php',
						"HostnameProcessor" => 'monolog/monolog/src/Monolog/Processor/HostnameProcessor.php',
						"IntrospectionProcessor" => 'monolog/monolog/src/Monolog/Processor/IntrospectionProcessor.php',
						"MemoryPeakUsageProcessor" => 'monolog/monolog/src/Monolog/Processor/MemoryPeakUsageProcessor.php',
						"MemoryProcessor" => 'monolog/monolog/src/Monolog/Processor/MemoryProcessor.php',
						"MemoryUsageProcessor" => 'monolog/monolog/src/Monolog/Processor/MemoryUsageProcessor.php',
						"MercurialProcessor" => 'monolog/monolog/src/Monolog/Processor/MercurialProcessor.php',
						"ProcessIdProcessor" => 'monolog/monolog/src/Monolog/Processor/ProcessIdProcessor.php',
						"ProcessorInterface" => 'monolog/monolog/src/Monolog/Processor/ProcessorInterface.php',
						"PsrLogMessageProcessor" => 'monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php',
						"TagProcessor" => 'monolog/monolog/src/Monolog/Processor/TagProcessor.php',
						"UidProcessor" => 'monolog/monolog/src/Monolog/Processor/UidProcessor.php',
						"WebProcessor" => 'monolog/monolog/src/Monolog/Processor/WebProcessor.php',
					],
				],
				"_Items" => [
					"DateTimeImmutable" => 'monolog/monolog/src/Monolog/DateTimeImmutable.php',
					"ErrorHandler" => 'monolog/monolog/src/Monolog/ErrorHandler.php',
					"Logger" => 'monolog/monolog/src/Monolog/Logger.php',
					"Registry" => 'monolog/monolog/src/Monolog/Registry.php',
					"ResettableInterface" => 'monolog/monolog/src/Monolog/ResettableInterface.php',
					"SignalHandler" => 'monolog/monolog/src/Monolog/SignalHandler.php',
					"Utils" => 'monolog/monolog/src/Monolog/Utils.php',
				],
			],
			"Mpociot" => [
				"Pipeline" => [
					"_Items" => [
						"Pipeline" => 'mpociot/pipeline/src/Pipeline.php',
					],
				],
				"_Items" => [
				],
			],
			"Opis" => [
				"Closure" => [
					"_Items" => [
						"Analyzer" => 'opis/closure/src/Analyzer.php',
						"ClosureContext" => 'opis/closure/src/ClosureContext.php',
						"ClosureScope" => 'opis/closure/src/ClosureScope.php',
						"ClosureStream" => 'opis/closure/src/ClosureStream.php',
						"ISecurityProvider" => 'opis/closure/src/ISecurityProvider.php',
						"ReflectionClosure" => 'opis/closure/src/ReflectionClosure.php',
						"SecurityException" => 'opis/closure/src/SecurityException.php',
						"SecurityProvider" => 'opis/closure/src/SecurityProvider.php',
						"SelfReference" => 'opis/closure/src/SelfReference.php',
						"SerializableClosure" => 'opis/closure/src/SerializableClosure.php',
					],
				],
				"_Items" => [
				],
			],
			"Psr" => [
				"Container" => [
					"_Items" => [
						"ContainerExceptionInterface" => 'psr/container/src/ContainerExceptionInterface.php',
						"ContainerInterface" => 'psr/container/src/ContainerInterface.php',
						"NotFoundExceptionInterface" => 'psr/container/src/NotFoundExceptionInterface.php',
					],
				],
				"Log" => [
					"_Items" => [
						"AbstractLogger" => 'psr/log/Psr/Log/AbstractLogger.php',
						"InvalidArgumentException" => 'psr/log/Psr/Log/InvalidArgumentException.php',
						"LoggerAwareInterface" => 'psr/log/Psr/Log/LoggerAwareInterface.php',
						"LoggerAwareTrait" => 'psr/log/Psr/Log/LoggerAwareTrait.php',
						"LoggerInterface" => 'psr/log/Psr/Log/LoggerInterface.php',
						"LoggerTrait" => 'psr/log/Psr/Log/LoggerTrait.php',
						"LogLevel" => 'psr/log/Psr/Log/LogLevel.php',
						"NullLogger" => 'psr/log/Psr/Log/NullLogger.php',
					],
				],
				"_Items" => [
				],
			],
			"React" => [
				"Cache" => [
					"_Items" => [
						"ArrayCache" => 'react/cache/src/ArrayCache.php',
						"CacheInterface" => 'react/cache/src/CacheInterface.php',
					],
				],
				"Dns" => [
					"Config" => [
						"_Items" => [
							"Config" => 'react/dns/src/Config/Config.php',
							"HostsFile" => 'react/dns/src/Config/HostsFile.php',
						],
					],
					"Model" => [
						"_Items" => [
							"Message" => 'react/dns/src/Model/Message.php',
							"Record" => 'react/dns/src/Model/Record.php',
						],
					],
					"Protocol" => [
						"_Items" => [
							"BinaryDumper" => 'react/dns/src/Protocol/BinaryDumper.php',
							"Parser" => 'react/dns/src/Protocol/Parser.php',
						],
					],
					"Query" => [
						"_Items" => [
							"CachingExecutor" => 'react/dns/src/Query/CachingExecutor.php',
							"CancellationException" => 'react/dns/src/Query/CancellationException.php',
							"CoopExecutor" => 'react/dns/src/Query/CoopExecutor.php',
							"ExecutorInterface" => 'react/dns/src/Query/ExecutorInterface.php',
							"HostsFileExecutor" => 'react/dns/src/Query/HostsFileExecutor.php',
							"Query" => 'react/dns/src/Query/Query.php',
							"RetryExecutor" => 'react/dns/src/Query/RetryExecutor.php',
							"SelectiveTransportExecutor" => 'react/dns/src/Query/SelectiveTransportExecutor.php',
							"TcpTransportExecutor" => 'react/dns/src/Query/TcpTransportExecutor.php',
							"TimeoutException" => 'react/dns/src/Query/TimeoutException.php',
							"TimeoutExecutor" => 'react/dns/src/Query/TimeoutExecutor.php',
							"UdpTransportExecutor" => 'react/dns/src/Query/UdpTransportExecutor.php',
						],
					],
					"Resolver" => [
						"_Items" => [
							"Factory" => 'react/dns/src/Resolver/Factory.php',
							"Resolver" => 'react/dns/src/Resolver/Resolver.php',
							"ResolverInterface" => 'react/dns/src/Resolver/ResolverInterface.php',
						],
					],
					"_Items" => [
						"BadServerException" => 'react/dns/src/BadServerException.php',
						"RecordNotFoundException" => 'react/dns/src/RecordNotFoundException.php',
					],
				],
				"EventLoop" => [
					"Tick" => [
						"_Items" => [
							"FutureTickQueue" => 'react/event-loop/src/Tick/FutureTickQueue.php',
						],
					],
					"Timer" => [
						"_Items" => [
							"Timer" => 'react/event-loop/src/Timer/Timer.php',
							"Timers" => 'react/event-loop/src/Timer/Timers.php',
						],
					],
					"_Items" => [
						"ExtEventLoop" => 'react/event-loop/src/ExtEventLoop.php',
						"ExtEvLoop" => 'react/event-loop/src/ExtEvLoop.php',
						"ExtLibeventLoop" => 'react/event-loop/src/ExtLibeventLoop.php',
						"ExtLibevLoop" => 'react/event-loop/src/ExtLibevLoop.php',
						"ExtUvLoop" => 'react/event-loop/src/ExtUvLoop.php',
						"Factory" => 'react/event-loop/src/Factory.php',
						"LoopInterface" => 'react/event-loop/src/LoopInterface.php',
						"SignalsHandler" => 'react/event-loop/src/SignalsHandler.php',
						"StreamSelectLoop" => 'react/event-loop/src/StreamSelectLoop.php',
						"TimerInterface" => 'react/event-loop/src/TimerInterface.php',
					],
				],
				"Promise" => [
					"Exception" => [
						"_Items" => [
							"LengthException" => 'react/promise/src/Exception/LengthException.php',
						],
					],
					"Timer" => [
						"_Items" => [
							"TimeoutException" => 'react/promise-timer/src/TimeoutException.php',
						],
					],
					"_Items" => [
						"CancellablePromiseInterface" => 'react/promise/src/CancellablePromiseInterface.php',
						"CancellationQueue" => 'react/promise/src/CancellationQueue.php',
						"Deferred" => 'react/promise/src/Deferred.php',
						"ExtendedPromiseInterface" => 'react/promise/src/ExtendedPromiseInterface.php',
						"FulfilledPromise" => 'react/promise/src/FulfilledPromise.php',
						"LazyPromise" => 'react/promise/src/LazyPromise.php',
						"Promise" => 'react/promise/src/Promise.php',
						"PromiseInterface" => 'react/promise/src/PromiseInterface.php',
						"PromisorInterface" => 'react/promise/src/PromisorInterface.php',
						"RejectedPromise" => 'react/promise/src/RejectedPromise.php',
						"UnhandledRejectionException" => 'react/promise/src/UnhandledRejectionException.php',
					],
				],
				"Socket" => [
					"_Items" => [
						"Connection" => 'react/socket/src/Connection.php',
						"ConnectionInterface" => 'react/socket/src/ConnectionInterface.php',
						"Connector" => 'react/socket/src/Connector.php',
						"ConnectorInterface" => 'react/socket/src/ConnectorInterface.php',
						"DnsConnector" => 'react/socket/src/DnsConnector.php',
						"FixedUriConnector" => 'react/socket/src/FixedUriConnector.php',
						"LimitingServer" => 'react/socket/src/LimitingServer.php',
						"SecureConnector" => 'react/socket/src/SecureConnector.php',
						"SecureServer" => 'react/socket/src/SecureServer.php',
						"Server" => 'react/socket/src/Server.php',
						"ServerInterface" => 'react/socket/src/ServerInterface.php',
						"StreamEncryption" => 'react/socket/src/StreamEncryption.php',
						"TcpConnector" => 'react/socket/src/TcpConnector.php',
						"TcpServer" => 'react/socket/src/TcpServer.php',
						"TimeoutConnector" => 'react/socket/src/TimeoutConnector.php',
						"UnixConnector" => 'react/socket/src/UnixConnector.php',
						"UnixServer" => 'react/socket/src/UnixServer.php',
					],
				],
				"Stream" => [
					"_Items" => [
						"CompositeStream" => 'react/stream/src/CompositeStream.php',
						"DuplexResourceStream" => 'react/stream/src/DuplexResourceStream.php',
						"DuplexStreamInterface" => 'react/stream/src/DuplexStreamInterface.php',
						"ReadableResourceStream" => 'react/stream/src/ReadableResourceStream.php',
						"ReadableStreamInterface" => 'react/stream/src/ReadableStreamInterface.php',
						"ThroughStream" => 'react/stream/src/ThroughStream.php',
						"Util" => 'react/stream/src/Util.php',
						"WritableResourceStream" => 'react/stream/src/WritableResourceStream.php',
						"WritableStreamInterface" => 'react/stream/src/WritableStreamInterface.php',
					],
				],
				"_Items" => [
				],
			],
			"RedLock" => [
				"_Items" => [
					"RedLock" => 'signe/redlock-php/src/RedLock.php',
				],
			],
			"Spatie" => [
				"Macroable" => [
					"_Items" => [
						"Macroable" => 'spatie/macroable/src/Macroable.php',
					],
				],
				"_Items" => [
				],
			],
			"Symfony" => [
				"Component" => [
					"Console" => [
						"Command" => [
							"_Items" => [
								"Command" => 'symfony/console/Command/Command.php',
								"HelpCommand" => 'symfony/console/Command/HelpCommand.php',
								"ListCommand" => 'symfony/console/Command/ListCommand.php',
								"LockableTrait" => 'symfony/console/Command/LockableTrait.php',
							],
						],
						"CommandLoader" => [
							"_Items" => [
								"CommandLoaderInterface" => 'symfony/console/CommandLoader/CommandLoaderInterface.php',
								"ContainerCommandLoader" => 'symfony/console/CommandLoader/ContainerCommandLoader.php',
								"FactoryCommandLoader" => 'symfony/console/CommandLoader/FactoryCommandLoader.php',
							],
						],
						"DependencyInjection" => [
							"_Items" => [
								"AddConsoleCommandPass" => 'symfony/console/DependencyInjection/AddConsoleCommandPass.php',
							],
						],
						"Descriptor" => [
							"_Items" => [
								"ApplicationDescription" => 'symfony/console/Descriptor/ApplicationDescription.php',
								"Descriptor" => 'symfony/console/Descriptor/Descriptor.php',
								"DescriptorInterface" => 'symfony/console/Descriptor/DescriptorInterface.php',
								"JsonDescriptor" => 'symfony/console/Descriptor/JsonDescriptor.php',
								"MarkdownDescriptor" => 'symfony/console/Descriptor/MarkdownDescriptor.php',
								"TextDescriptor" => 'symfony/console/Descriptor/TextDescriptor.php',
								"XmlDescriptor" => 'symfony/console/Descriptor/XmlDescriptor.php',
							],
						],
						"Event" => [
							"_Items" => [
								"ConsoleCommandEvent" => 'symfony/console/Event/ConsoleCommandEvent.php',
								"ConsoleErrorEvent" => 'symfony/console/Event/ConsoleErrorEvent.php',
								"ConsoleEvent" => 'symfony/console/Event/ConsoleEvent.php',
								"ConsoleTerminateEvent" => 'symfony/console/Event/ConsoleTerminateEvent.php',
							],
						],
						"EventListener" => [
							"_Items" => [
								"ErrorListener" => 'symfony/console/EventListener/ErrorListener.php',
							],
						],
						"Exception" => [
							"_Items" => [
								"CommandNotFoundException" => 'symfony/console/Exception/CommandNotFoundException.php',
								"ExceptionInterface" => 'symfony/console/Exception/ExceptionInterface.php',
								"InvalidArgumentException" => 'symfony/console/Exception/InvalidArgumentException.php',
								"InvalidOptionException" => 'symfony/console/Exception/InvalidOptionException.php',
								"LogicException" => 'symfony/console/Exception/LogicException.php',
								"NamespaceNotFoundException" => 'symfony/console/Exception/NamespaceNotFoundException.php',
								"RuntimeException" => 'symfony/console/Exception/RuntimeException.php',
							],
						],
						"Formatter" => [
							"_Items" => [
								"OutputFormatter" => 'symfony/console/Formatter/OutputFormatter.php',
								"OutputFormatterInterface" => 'symfony/console/Formatter/OutputFormatterInterface.php',
								"OutputFormatterStyle" => 'symfony/console/Formatter/OutputFormatterStyle.php',
								"OutputFormatterStyleInterface" => 'symfony/console/Formatter/OutputFormatterStyleInterface.php',
								"OutputFormatterStyleStack" => 'symfony/console/Formatter/OutputFormatterStyleStack.php',
								"WrappableOutputFormatterInterface" => 'symfony/console/Formatter/WrappableOutputFormatterInterface.php',
							],
						],
						"Helper" => [
							"_Items" => [
								"DebugFormatterHelper" => 'symfony/console/Helper/DebugFormatterHelper.php',
								"DescriptorHelper" => 'symfony/console/Helper/DescriptorHelper.php',
								"Dumper" => 'symfony/console/Helper/Dumper.php',
								"FormatterHelper" => 'symfony/console/Helper/FormatterHelper.php',
								"Helper" => 'symfony/console/Helper/Helper.php',
								"HelperInterface" => 'symfony/console/Helper/HelperInterface.php',
								"HelperSet" => 'symfony/console/Helper/HelperSet.php',
								"InputAwareHelper" => 'symfony/console/Helper/InputAwareHelper.php',
								"ProcessHelper" => 'symfony/console/Helper/ProcessHelper.php',
								"ProgressBar" => 'symfony/console/Helper/ProgressBar.php',
								"ProgressIndicator" => 'symfony/console/Helper/ProgressIndicator.php',
								"QuestionHelper" => 'symfony/console/Helper/QuestionHelper.php',
								"SymfonyQuestionHelper" => 'symfony/console/Helper/SymfonyQuestionHelper.php',
								"Table" => 'symfony/console/Helper/Table.php',
								"TableCell" => 'symfony/console/Helper/TableCell.php',
								"TableRows" => 'symfony/console/Helper/TableRows.php',
								"TableSeparator" => 'symfony/console/Helper/TableSeparator.php',
								"TableStyle" => 'symfony/console/Helper/TableStyle.php',
							],
						],
						"Input" => [
							"_Items" => [
								"ArgvInput" => 'symfony/console/Input/ArgvInput.php',
								"ArrayInput" => 'symfony/console/Input/ArrayInput.php',
								"Input" => 'symfony/console/Input/Input.php',
								"InputArgument" => 'symfony/console/Input/InputArgument.php',
								"InputAwareInterface" => 'symfony/console/Input/InputAwareInterface.php',
								"InputDefinition" => 'symfony/console/Input/InputDefinition.php',
								"InputInterface" => 'symfony/console/Input/InputInterface.php',
								"InputOption" => 'symfony/console/Input/InputOption.php',
								"StreamableInputInterface" => 'symfony/console/Input/StreamableInputInterface.php',
								"StringInput" => 'symfony/console/Input/StringInput.php',
							],
						],
						"Logger" => [
							"_Items" => [
								"ConsoleLogger" => 'symfony/console/Logger/ConsoleLogger.php',
							],
						],
						"Output" => [
							"_Items" => [
								"BufferedOutput" => 'symfony/console/Output/BufferedOutput.php',
								"ConsoleOutput" => 'symfony/console/Output/ConsoleOutput.php',
								"ConsoleOutputInterface" => 'symfony/console/Output/ConsoleOutputInterface.php',
								"ConsoleSectionOutput" => 'symfony/console/Output/ConsoleSectionOutput.php',
								"NullOutput" => 'symfony/console/Output/NullOutput.php',
								"Output" => 'symfony/console/Output/Output.php',
								"OutputInterface" => 'symfony/console/Output/OutputInterface.php',
								"StreamOutput" => 'symfony/console/Output/StreamOutput.php',
							],
						],
						"Question" => [
							"_Items" => [
								"ChoiceQuestion" => 'symfony/console/Question/ChoiceQuestion.php',
								"ConfirmationQuestion" => 'symfony/console/Question/ConfirmationQuestion.php',
								"Question" => 'symfony/console/Question/Question.php',
							],
						],
						"Style" => [
							"_Items" => [
								"OutputStyle" => 'symfony/console/Style/OutputStyle.php',
								"StyleInterface" => 'symfony/console/Style/StyleInterface.php',
								"SymfonyStyle" => 'symfony/console/Style/SymfonyStyle.php',
							],
						],
						"Tester" => [
							"_Items" => [
								"ApplicationTester" => 'symfony/console/Tester/ApplicationTester.php',
								"CommandTester" => 'symfony/console/Tester/CommandTester.php',
								"TesterTrait" => 'symfony/console/Tester/TesterTrait.php',
							],
						],
						"_Items" => [
							"Application" => 'symfony/console/Application.php',
							"ConsoleEvents" => 'symfony/console/ConsoleEvents.php',
							"Terminal" => 'symfony/console/Terminal.php',
						],
					],
					"HttpFoundation" => [
						"Exception" => [
							"_Items" => [
								"ConflictingHeadersException" => 'symfony/http-foundation/Exception/ConflictingHeadersException.php',
								"RequestExceptionInterface" => 'symfony/http-foundation/Exception/RequestExceptionInterface.php',
								"SuspiciousOperationException" => 'symfony/http-foundation/Exception/SuspiciousOperationException.php',
							],
						],
						"File" => [
							"Exception" => [
								"_Items" => [
									"AccessDeniedException" => 'symfony/http-foundation/File/Exception/AccessDeniedException.php',
									"CannotWriteFileException" => 'symfony/http-foundation/File/Exception/CannotWriteFileException.php',
									"ExtensionFileException" => 'symfony/http-foundation/File/Exception/ExtensionFileException.php',
									"FileException" => 'symfony/http-foundation/File/Exception/FileException.php',
									"FileNotFoundException" => 'symfony/http-foundation/File/Exception/FileNotFoundException.php',
									"FormSizeFileException" => 'symfony/http-foundation/File/Exception/FormSizeFileException.php',
									"IniSizeFileException" => 'symfony/http-foundation/File/Exception/IniSizeFileException.php',
									"NoFileException" => 'symfony/http-foundation/File/Exception/NoFileException.php',
									"NoTmpDirFileException" => 'symfony/http-foundation/File/Exception/NoTmpDirFileException.php',
									"PartialFileException" => 'symfony/http-foundation/File/Exception/PartialFileException.php',
									"UnexpectedTypeException" => 'symfony/http-foundation/File/Exception/UnexpectedTypeException.php',
									"UploadException" => 'symfony/http-foundation/File/Exception/UploadException.php',
								],
							],
							"MimeType" => [
								"_Items" => [
									"ExtensionGuesser" => 'symfony/http-foundation/File/MimeType/ExtensionGuesser.php',
									"ExtensionGuesserInterface" => 'symfony/http-foundation/File/MimeType/ExtensionGuesserInterface.php',
									"FileBinaryMimeTypeGuesser" => 'symfony/http-foundation/File/MimeType/FileBinaryMimeTypeGuesser.php',
									"FileinfoMimeTypeGuesser" => 'symfony/http-foundation/File/MimeType/FileinfoMimeTypeGuesser.php',
									"MimeTypeExtensionGuesser" => 'symfony/http-foundation/File/MimeType/MimeTypeExtensionGuesser.php',
									"MimeTypeGuesser" => 'symfony/http-foundation/File/MimeType/MimeTypeGuesser.php',
									"MimeTypeGuesserInterface" => 'symfony/http-foundation/File/MimeType/MimeTypeGuesserInterface.php',
								],
							],
							"_Items" => [
								"File" => 'symfony/http-foundation/File/File.php',
								"Stream" => 'symfony/http-foundation/File/Stream.php',
								"UploadedFile" => 'symfony/http-foundation/File/UploadedFile.php',
							],
						],
						"Session" => [
							"Attribute" => [
								"_Items" => [
									"AttributeBag" => 'symfony/http-foundation/Session/Attribute/AttributeBag.php',
									"AttributeBagInterface" => 'symfony/http-foundation/Session/Attribute/AttributeBagInterface.php',
									"NamespacedAttributeBag" => 'symfony/http-foundation/Session/Attribute/NamespacedAttributeBag.php',
								],
							],
							"Flash" => [
								"_Items" => [
									"AutoExpireFlashBag" => 'symfony/http-foundation/Session/Flash/AutoExpireFlashBag.php',
									"FlashBag" => 'symfony/http-foundation/Session/Flash/FlashBag.php',
									"FlashBagInterface" => 'symfony/http-foundation/Session/Flash/FlashBagInterface.php',
								],
							],
							"Storage" => [
								"Handler" => [
									"_Items" => [
										"AbstractSessionHandler" => 'symfony/http-foundation/Session/Storage/Handler/AbstractSessionHandler.php',
										"MemcachedSessionHandler" => 'symfony/http-foundation/Session/Storage/Handler/MemcachedSessionHandler.php',
										"MigratingSessionHandler" => 'symfony/http-foundation/Session/Storage/Handler/MigratingSessionHandler.php',
										"MongoDbSessionHandler" => 'symfony/http-foundation/Session/Storage/Handler/MongoDbSessionHandler.php',
										"NativeFileSessionHandler" => 'symfony/http-foundation/Session/Storage/Handler/NativeFileSessionHandler.php',
										"NullSessionHandler" => 'symfony/http-foundation/Session/Storage/Handler/NullSessionHandler.php',
										"PdoSessionHandler" => 'symfony/http-foundation/Session/Storage/Handler/PdoSessionHandler.php',
										"RedisSessionHandler" => 'symfony/http-foundation/Session/Storage/Handler/RedisSessionHandler.php',
										"StrictSessionHandler" => 'symfony/http-foundation/Session/Storage/Handler/StrictSessionHandler.php',
									],
								],
								"Proxy" => [
									"_Items" => [
										"AbstractProxy" => 'symfony/http-foundation/Session/Storage/Proxy/AbstractProxy.php',
										"SessionHandlerProxy" => 'symfony/http-foundation/Session/Storage/Proxy/SessionHandlerProxy.php',
									],
								],
								"_Items" => [
									"MetadataBag" => 'symfony/http-foundation/Session/Storage/MetadataBag.php',
									"MockArraySessionStorage" => 'symfony/http-foundation/Session/Storage/MockArraySessionStorage.php',
									"MockFileSessionStorage" => 'symfony/http-foundation/Session/Storage/MockFileSessionStorage.php',
									"NativeSessionStorage" => 'symfony/http-foundation/Session/Storage/NativeSessionStorage.php',
									"PhpBridgeSessionStorage" => 'symfony/http-foundation/Session/Storage/PhpBridgeSessionStorage.php',
									"SessionStorageInterface" => 'symfony/http-foundation/Session/Storage/SessionStorageInterface.php',
								],
							],
							"_Items" => [
								"Session" => 'symfony/http-foundation/Session/Session.php',
								"SessionBagInterface" => 'symfony/http-foundation/Session/SessionBagInterface.php',
								"SessionBagProxy" => 'symfony/http-foundation/Session/SessionBagProxy.php',
								"SessionInterface" => 'symfony/http-foundation/Session/SessionInterface.php',
								"SessionUtils" => 'symfony/http-foundation/Session/SessionUtils.php',
							],
						],
						"_Items" => [
							"AcceptHeader" => 'symfony/http-foundation/AcceptHeader.php',
							"AcceptHeaderItem" => 'symfony/http-foundation/AcceptHeaderItem.php',
							"ApacheRequest" => 'symfony/http-foundation/ApacheRequest.php',
							"BinaryFileResponse" => 'symfony/http-foundation/BinaryFileResponse.php',
							"Cookie" => 'symfony/http-foundation/Cookie.php',
							"ExpressionRequestMatcher" => 'symfony/http-foundation/ExpressionRequestMatcher.php',
							"FileBag" => 'symfony/http-foundation/FileBag.php',
							"HeaderBag" => 'symfony/http-foundation/HeaderBag.php',
							"HeaderUtils" => 'symfony/http-foundation/HeaderUtils.php',
							"IpUtils" => 'symfony/http-foundation/IpUtils.php',
							"JsonResponse" => 'symfony/http-foundation/JsonResponse.php',
							"ParameterBag" => 'symfony/http-foundation/ParameterBag.php',
							"RedirectResponse" => 'symfony/http-foundation/RedirectResponse.php',
							"Request" => 'symfony/http-foundation/Request.php',
							"RequestMatcher" => 'symfony/http-foundation/RequestMatcher.php',
							"RequestMatcherInterface" => 'symfony/http-foundation/RequestMatcherInterface.php',
							"RequestStack" => 'symfony/http-foundation/RequestStack.php',
							"Response" => 'symfony/http-foundation/Response.php',
							"ResponseHeaderBag" => 'symfony/http-foundation/ResponseHeaderBag.php',
							"ServerBag" => 'symfony/http-foundation/ServerBag.php',
							"StreamedResponse" => 'symfony/http-foundation/StreamedResponse.php',
							"UrlHelper" => 'symfony/http-foundation/UrlHelper.php',
						],
					],
					"Mime" => [
						"DependencyInjection" => [
							"_Items" => [
								"AddMimeTypeGuesserPass" => 'symfony/mime/DependencyInjection/AddMimeTypeGuesserPass.php',
							],
						],
						"Encoder" => [
							"_Items" => [
								"AddressEncoderInterface" => 'symfony/mime/Encoder/AddressEncoderInterface.php',
								"Base64ContentEncoder" => 'symfony/mime/Encoder/Base64ContentEncoder.php',
								"Base64Encoder" => 'symfony/mime/Encoder/Base64Encoder.php',
								"Base64MimeHeaderEncoder" => 'symfony/mime/Encoder/Base64MimeHeaderEncoder.php',
								"ContentEncoderInterface" => 'symfony/mime/Encoder/ContentEncoderInterface.php',
								"EightBitContentEncoder" => 'symfony/mime/Encoder/EightBitContentEncoder.php',
								"EncoderInterface" => 'symfony/mime/Encoder/EncoderInterface.php',
								"IdnAddressEncoder" => 'symfony/mime/Encoder/IdnAddressEncoder.php',
								"MimeHeaderEncoderInterface" => 'symfony/mime/Encoder/MimeHeaderEncoderInterface.php',
								"QpContentEncoder" => 'symfony/mime/Encoder/QpContentEncoder.php',
								"QpEncoder" => 'symfony/mime/Encoder/QpEncoder.php',
								"QpMimeHeaderEncoder" => 'symfony/mime/Encoder/QpMimeHeaderEncoder.php',
								"Rfc2231Encoder" => 'symfony/mime/Encoder/Rfc2231Encoder.php',
							],
						],
						"Exception" => [
							"_Items" => [
								"AddressEncoderException" => 'symfony/mime/Exception/AddressEncoderException.php',
								"ExceptionInterface" => 'symfony/mime/Exception/ExceptionInterface.php',
								"InvalidArgumentException" => 'symfony/mime/Exception/InvalidArgumentException.php',
								"LogicException" => 'symfony/mime/Exception/LogicException.php',
								"RfcComplianceException" => 'symfony/mime/Exception/RfcComplianceException.php',
								"RuntimeException" => 'symfony/mime/Exception/RuntimeException.php',
							],
						],
						"Header" => [
							"_Items" => [
								"AbstractHeader" => 'symfony/mime/Header/AbstractHeader.php',
								"DateHeader" => 'symfony/mime/Header/DateHeader.php',
								"HeaderInterface" => 'symfony/mime/Header/HeaderInterface.php',
								"Headers" => 'symfony/mime/Header/Headers.php',
								"IdentificationHeader" => 'symfony/mime/Header/IdentificationHeader.php',
								"MailboxHeader" => 'symfony/mime/Header/MailboxHeader.php',
								"MailboxListHeader" => 'symfony/mime/Header/MailboxListHeader.php',
								"ParameterizedHeader" => 'symfony/mime/Header/ParameterizedHeader.php',
								"PathHeader" => 'symfony/mime/Header/PathHeader.php',
								"UnstructuredHeader" => 'symfony/mime/Header/UnstructuredHeader.php',
							],
						],
						"Part" => [
							"Multipart" => [
								"_Items" => [
									"AlternativePart" => 'symfony/mime/Part/Multipart/AlternativePart.php',
									"DigestPart" => 'symfony/mime/Part/Multipart/DigestPart.php',
									"FormDataPart" => 'symfony/mime/Part/Multipart/FormDataPart.php',
									"MixedPart" => 'symfony/mime/Part/Multipart/MixedPart.php',
									"RelatedPart" => 'symfony/mime/Part/Multipart/RelatedPart.php',
								],
							],
							"_Items" => [
								"AbstractMultipartPart" => 'symfony/mime/Part/AbstractMultipartPart.php',
								"AbstractPart" => 'symfony/mime/Part/AbstractPart.php',
								"DataPart" => 'symfony/mime/Part/DataPart.php',
								"MessagePart" => 'symfony/mime/Part/MessagePart.php',
								"TextPart" => 'symfony/mime/Part/TextPart.php',
							],
						],
						"_Items" => [
							"Address" => 'symfony/mime/Address.php',
							"BodyRendererInterface" => 'symfony/mime/BodyRendererInterface.php',
							"CharacterStream" => 'symfony/mime/CharacterStream.php',
							"Email" => 'symfony/mime/Email.php',
							"FileBinaryMimeTypeGuesser" => 'symfony/mime/FileBinaryMimeTypeGuesser.php',
							"FileinfoMimeTypeGuesser" => 'symfony/mime/FileinfoMimeTypeGuesser.php',
							"Message" => 'symfony/mime/Message.php',
							"MessageConverter" => 'symfony/mime/MessageConverter.php',
							"MimeTypeGuesserInterface" => 'symfony/mime/MimeTypeGuesserInterface.php',
							"MimeTypes" => 'symfony/mime/MimeTypes.php',
							"MimeTypesInterface" => 'symfony/mime/MimeTypesInterface.php',
							"NamedAddress" => 'symfony/mime/NamedAddress.php',
							"RawMessage" => 'symfony/mime/RawMessage.php',
						],
					],
					"VarDumper" => [
						"Caster" => [
							"_Items" => [
								"AmqpCaster" => 'symfony/var-dumper/Caster/AmqpCaster.php',
								"ArgsStub" => 'symfony/var-dumper/Caster/ArgsStub.php',
								"Caster" => 'symfony/var-dumper/Caster/Caster.php',
								"ClassStub" => 'symfony/var-dumper/Caster/ClassStub.php',
								"ConstStub" => 'symfony/var-dumper/Caster/ConstStub.php',
								"CutArrayStub" => 'symfony/var-dumper/Caster/CutArrayStub.php',
								"CutStub" => 'symfony/var-dumper/Caster/CutStub.php',
								"DateCaster" => 'symfony/var-dumper/Caster/DateCaster.php',
								"DoctrineCaster" => 'symfony/var-dumper/Caster/DoctrineCaster.php',
								"DOMCaster" => 'symfony/var-dumper/Caster/DOMCaster.php',
								"DsCaster" => 'symfony/var-dumper/Caster/DsCaster.php',
								"DsPairStub" => 'symfony/var-dumper/Caster/DsPairStub.php',
								"EnumStub" => 'symfony/var-dumper/Caster/EnumStub.php',
								"ExceptionCaster" => 'symfony/var-dumper/Caster/ExceptionCaster.php',
								"FrameStub" => 'symfony/var-dumper/Caster/FrameStub.php',
								"GmpCaster" => 'symfony/var-dumper/Caster/GmpCaster.php',
								"IntlCaster" => 'symfony/var-dumper/Caster/IntlCaster.php',
								"LinkStub" => 'symfony/var-dumper/Caster/LinkStub.php',
								"MemcachedCaster" => 'symfony/var-dumper/Caster/MemcachedCaster.php',
								"PdoCaster" => 'symfony/var-dumper/Caster/PdoCaster.php',
								"PgSqlCaster" => 'symfony/var-dumper/Caster/PgSqlCaster.php',
								"ProxyManagerCaster" => 'symfony/var-dumper/Caster/ProxyManagerCaster.php',
								"RedisCaster" => 'symfony/var-dumper/Caster/RedisCaster.php',
								"ReflectionCaster" => 'symfony/var-dumper/Caster/ReflectionCaster.php',
								"ResourceCaster" => 'symfony/var-dumper/Caster/ResourceCaster.php',
								"SplCaster" => 'symfony/var-dumper/Caster/SplCaster.php',
								"StubCaster" => 'symfony/var-dumper/Caster/StubCaster.php',
								"SymfonyCaster" => 'symfony/var-dumper/Caster/SymfonyCaster.php',
								"TraceStub" => 'symfony/var-dumper/Caster/TraceStub.php',
								"XmlReaderCaster" => 'symfony/var-dumper/Caster/XmlReaderCaster.php',
								"XmlResourceCaster" => 'symfony/var-dumper/Caster/XmlResourceCaster.php',
							],
						],
						"Cloner" => [
							"_Items" => [
								"AbstractCloner" => 'symfony/var-dumper/Cloner/AbstractCloner.php',
								"ClonerInterface" => 'symfony/var-dumper/Cloner/ClonerInterface.php',
								"Cursor" => 'symfony/var-dumper/Cloner/Cursor.php',
								"Data" => 'symfony/var-dumper/Cloner/Data.php',
								"DumperInterface" => 'symfony/var-dumper/Cloner/DumperInterface.php',
								"Stub" => 'symfony/var-dumper/Cloner/Stub.php',
								"VarCloner" => 'symfony/var-dumper/Cloner/VarCloner.php',
							],
						],
						"Command" => [
							"Descriptor" => [
								"_Items" => [
									"CliDescriptor" => 'symfony/var-dumper/Command/Descriptor/CliDescriptor.php',
									"DumpDescriptorInterface" => 'symfony/var-dumper/Command/Descriptor/DumpDescriptorInterface.php',
									"HtmlDescriptor" => 'symfony/var-dumper/Command/Descriptor/HtmlDescriptor.php',
								],
							],
							"_Items" => [
								"ServerDumpCommand" => 'symfony/var-dumper/Command/ServerDumpCommand.php',
							],
						],
						"Dumper" => [
							"ContextProvider" => [
								"_Items" => [
									"CliContextProvider" => 'symfony/var-dumper/Dumper/ContextProvider/CliContextProvider.php',
									"ContextProviderInterface" => 'symfony/var-dumper/Dumper/ContextProvider/ContextProviderInterface.php',
									"RequestContextProvider" => 'symfony/var-dumper/Dumper/ContextProvider/RequestContextProvider.php',
									"SourceContextProvider" => 'symfony/var-dumper/Dumper/ContextProvider/SourceContextProvider.php',
								],
							],
							"_Items" => [
								"AbstractDumper" => 'symfony/var-dumper/Dumper/AbstractDumper.php',
								"CliDumper" => 'symfony/var-dumper/Dumper/CliDumper.php',
								"DataDumperInterface" => 'symfony/var-dumper/Dumper/DataDumperInterface.php',
								"HtmlDumper" => 'symfony/var-dumper/Dumper/HtmlDumper.php',
								"ServerDumper" => 'symfony/var-dumper/Dumper/ServerDumper.php',
							],
						],
						"Exception" => [
							"_Items" => [
								"ThrowingCasterException" => 'symfony/var-dumper/Exception/ThrowingCasterException.php',
							],
						],
						"Server" => [
							"_Items" => [
								"Connection" => 'symfony/var-dumper/Server/Connection.php',
								"DumpServer" => 'symfony/var-dumper/Server/DumpServer.php',
							],
						],
						"_Items" => [
							"VarDumper" => 'symfony/var-dumper/VarDumper.php',
						],
					],
					"Yaml" => [
						"Exception" => [
							"_Items" => [
								"DumpException" => 'symfony/yaml/Exception/DumpException.php',
								"ExceptionInterface" => 'symfony/yaml/Exception/ExceptionInterface.php',
								"ParseException" => 'symfony/yaml/Exception/ParseException.php',
								"RuntimeException" => 'symfony/yaml/Exception/RuntimeException.php',
							],
						],
						"_Items" => [
							"Dumper" => 'symfony/yaml/Dumper.php',
							"Escaper" => 'symfony/yaml/Escaper.php',
							"Inline" => 'symfony/yaml/Inline.php',
							"Parser" => 'symfony/yaml/Parser.php',
							"Unescaper" => 'symfony/yaml/Unescaper.php',
							"Yaml" => 'symfony/yaml/Yaml.php',
						],
					],
					"_Items" => [
					],
				],
				"Polyfill" => [
					"Ctype" => [
						"_Items" => [
							"Ctype" => 'symfony/polyfill-ctype/Ctype.php',
						],
					],
					"Intl" => [
						"Idn" => [
							"_Items" => [
								"Idn" => 'symfony/polyfill-intl-idn/Idn.php',
							],
						],
						"_Items" => [
						],
					],
					"Mbstring" => [
						"_Items" => [
							"Mbstring" => 'symfony/polyfill-mbstring/Mbstring.php',
						],
					],
					"Php72" => [
						"_Items" => [
							"Php72" => 'symfony/polyfill-php72/Php72.php',
						],
					],
					"Php73" => [
						"_Items" => [
							"Php73" => 'symfony/polyfill-php73/Php73.php',
						],
					],
					"_Items" => [
					],
				],
				"Contracts" => [
					"Service" => [
						"_Items" => [
							"ResetInterface" => 'symfony/service-contracts/ResetInterface.php',
							"ServiceLocatorTrait" => 'symfony/service-contracts/ServiceLocatorTrait.php',
							"ServiceProviderInterface" => 'symfony/service-contracts/ServiceProviderInterface.php',
							"ServiceSubscriberInterface" => 'symfony/service-contracts/ServiceSubscriberInterface.php',
							"ServiceSubscriberTrait" => 'symfony/service-contracts/ServiceSubscriberTrait.php',
						],
					],
					"_Items" => [
					],
				],
				"_Items" => [
				],
			],
			"Tightenco" => [
				"Collect" => [
					"Contracts" => [
						"Support" => [
							"_Items" => [
								"Arrayable" => 'tightenco/collect/src/Collect/Contracts/Support/Arrayable.php',
								"Htmlable" => 'tightenco/collect/src/Collect/Contracts/Support/Htmlable.php',
								"Jsonable" => 'tightenco/collect/src/Collect/Contracts/Support/Jsonable.php',
							],
						],
						"_Items" => [
						],
					],
					"Support" => [
						"Traits" => [
							"_Items" => [
								"Macroable" => 'tightenco/collect/src/Collect/Support/Traits/Macroable.php',
							],
						],
						"_Items" => [
							"Arr" => 'tightenco/collect/src/Collect/Support/Arr.php',
							"Collection" => 'tightenco/collect/src/Collect/Support/Collection.php',
							"HigherOrderCollectionProxy" => 'tightenco/collect/src/Collect/Support/HigherOrderCollectionProxy.php',
							"HtmlString" => 'tightenco/collect/src/Collect/Support/HtmlString.php',
						],
					],
					"_Items" => [
					],
				],
				"_Items" => [
				],
			],
			"_Items" => [
				"ComposerAutoloaderInited52258c47506bb06cd8d32fdf88156a" => 'composer/autoload_real.php',
				"LINEBotTiny" => 'linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php',
				"JsonException" => 'symfony/polyfill-php73/Resources/stubs/JsonException.php',
			],
		];
	}

	public static function Autoload_File_Mapping()
	{
		self::$autoload_files = [
				'5e542e65c06136d8b5a9be93b6252e3f' => 'opis/closure/functions.php',
				'2692c8007f216c044b30161f9a0ea1f7' => 'react/promise/src/functions_include.php',
				'bbb734b748bcbbed3f75fe65aebdba08' => 'react/promise-timer/src/functions_include.php',
				'631e27653e6b6eab4467fee685cdcd60' => 'symfony/polyfill-ctype/bootstrap.php',
				'b00be51f2f39ae517e78135278b7e0c9' => 'symfony/polyfill-intl-idn/bootstrap.php',
				'cb46e787aba770a09023ef52ee9c6b42' => 'symfony/polyfill-mbstring/bootstrap.php',
				'930b0cc67bf61df8ddd305a09235870a' => 'symfony/polyfill-php72/bootstrap.php',
				'174730de74cbd282e4a0cbc2be4dc7bd' => 'symfony/polyfill-php73/bootstrap.php',
				'e70f9cd6d5da639c76256ecbe2cf3de8' => 'symfony/var-dumper/Resources/functions/dump.php',
				'242d1de116a4fad8d44965c367df1751' => 'tightenco/collect/src/Collect/Support/helpers.php',
				'd33a622ab963cf8c165c661ff871e9e9' => 'tightenco/collect/src/Collect/Support/alias.php',
		];
	}

	public static function Load_Class_Loader($class)
	{
		// 處理mapping
		if(empty(self::$vendor))
		{
			self::Class_Mapping();
		}

		$nodes_ = explode("\\" , $class);

		$find_ = &self::$vendor;

		$last_ = count($nodes_) - 1;
		$i = 0;
		foreach($nodes_ as &$node)
		{
			if($i == $last_)
			{
				$find_ = &$find_["_Items"];
				if(empty($temp_ = &$find_[$node]))
				{
					return false;
				}
				$filename_ = &$temp_;
				// 取消reference，避免$temp_ NULL時會加入'key' => NULL
				unset($temp_);

				require self::$vendor_dir . $filename_;
			}
			else
			{
				if(empty($temp_ = &$find_[$node]))
				{
					return false;
				}
				$find_ = &$temp_;
				// 取消reference，避免$temp_ NULL時會加入'key' => NULL
				unset($temp_);
				$i++;
			}
		}

	}

	public static function Autoload()
	{
		self::$vendor_dir = dirname(__FILE__) . '/';
		if (null !== self::$loader)
		{
			return self::$loader;
		}

		self::$loader = new \vendor\vendor_loader();
		spl_autoload_register(array('vendor\vendor_loader', 'Load_Class_Loader'), true, true);

		if(empty(self::$autoload_files))
		{
			self::Autoload_File_Mapping();
		}

		//load autoload files
		// 避免跟其他套件重複引用，這裡用require_once
		foreach (self::$autoload_files as $key => &$file)
		{
			if (empty($GLOBALS['__composer_autoload_files'][$key]))
			{
				require_once self::$vendor_dir . $file;
				
				$GLOBALS['__composer_autoload_files'][$key] = true;
			}
		}

		return self::$loader;
	}
}

return \vendor\vendor_loader::Autoload();