<?php

namespace cbp\redactorFaList\models;

use craft\base\Model;

class Settings extends Model
{
    public $icons = [
        "bicycle",
        "church",
        "book-reader",
        "laptop-house",
        "arrow-circle-up",
        "hanukiah",
        "moon",
        "restroom",
        "grin-tongue-wink",
        "folder-minus",
        "arrow-circle-down",
        "map-signs",
        "infinity",
        "play",
        "inbox",
        "poop",
        "cocktail",
        "money-check-alt",
        "luggage-cart",
        "pepper-hot",
        "list",
        "rss",
        "hippo",
        "venus",
        "history",
        "random",
        "columns",
        "weight-hanging",
        "archway",
        "exclamation-triangle",
        "grip-horizontal",
        "meh-rolling-eyes",
        "feather",
        "theater-masks",
        "phone-volume",
        "step-forward",
        "mail-bulk",
        "star-half-alt",
        "pencil-alt",
        "unlink",
        "tags",
        "grip-lines-vertical",
        "comment-dots",
        "holly-berry",
        "volume-mute",
        "people-arrows",
        "sort-numeric-down-alt",
        "map",
        "phone-square",
        "greater-than-equal",
        "cloud-upload-alt",
        "dumbbell",
        "undo-alt",
        "skating",
        "tv",
        "wheelchair",
        "tty",
        "video-slash",
        "hourglass-half",
        "pallet",
        "vest-patches",
        "skiing-nordic",
        "hand-rock",
        "link",
        "drafting-compass",
        "tree",
        "user-slash",
        "dog",
        "dice-two",
        "frown",
        "pencil-ruler",
        "chevron-left",
        "paint-brush",
        "phone-alt",
        "calculator",
        "allergies",
        "tools",
        "th",
        "sd-card",
        "house-damage",
        "play-circle",
        "network-wired",
        "dna",
        "toilet",
        "street-view",
        "plus",
        "tablet",
        "shipping-fast",
        "dice-d6",
        "cloud-showers-heavy",
        "thumbs-down",
        "shopping-basket",
        "money-bill-wave",
        "cloud-moon-rain",
        "sliders-h",
        "spider",
        "camera-retro",
        "thermometer",
        "question-circle",
        "map-marked-alt",
        "redo-alt",
        "dumpster-fire",
        "parking",
        "fist-raised",
        "donate",
        "hat-wizard",
        "sort-numeric-up-alt",
        "microphone-alt",
        "dharmachakra",
        "ruler",
        "hockey-puck",
        "ethernet",
        "underline",
        "ribbon",
        "percent",
        "arrows-alt-h",
        "universal-access",
        "dice-one",
        "democrat",
        "lock",
        "scroll",
        "star-half",
        "chess",
        "grin-hearts",
        "glass-whiskey",
        "qrcode",
        "chess-rook",
        "file-excel",
        "registered",
        "mask",
        "times",
        "coins",
        "compact-disc",
        "hand-holding-medical",
        "snowman",
        "calendar-week",
        "mobile",
        "remove-format",
        "sort-alpha-up",
        "user-injured",
        "signal",
        "newspaper",
        "temperature-low",
        "bolt",
        "draw-polygon",
        "tint-slash",
        "align-left",
        "sign-out-alt",
        "blind",
        "info",
        "box",
        "shopping-bag",
        "dice",
        "envelope-square",
        "socks",
        "door-open",
        "recycle",
        "sync-alt",
        "suitcase",
        "store-alt-slash",
        "id-card-alt",
        "marker",
        "sort-numeric-up",
        "user-alt",
        "shuttle-van",
        "microphone",
        "angle-up",
        "swimming-pool",
        "microphone-slash",
        "caret-square-up",
        "concierge-bell",
        "align-justify",
        "sticky-note",
        "smoking",
        "child",
        "hands-wash",
        "pause-circle",
        "percentage",
        "laugh",
        "tape",
        "map-marker-alt",
        "hamburger",
        "glass-martini-alt",
        "car",
        "toilet-paper-slash",
        "monument",
        "bell",
        "truck-moving",
        "expand",
        "head-side-cough",
        "plane-slash",
        "binoculars",
        "angle-double-down",
        "paw",
        "icons",
        "quran",
        "truck-loading",
        "podcast",
        "industry",
        "anchor",
        "id-card",
        "blender",
        "hourglass-end",
        "ghost",
        "square",
        "hamsa",
        "x-ray",
        "phone-square-alt",
        "check-circle",
        "bath",
        "grin-tongue-squint",
        "signature",
        "thermometer-empty",
        "birthday-cake",
        "user-shield",
        "sad-tear",
        "hiking",
        "pen-nib",
        "compress",
        "grin-wink",
        "video",
        "credit-card",
        "chalkboard",
        "helicopter",
        "file-video",
        "eject",
        "lungs",
        "text-height",
        "hourglass-start",
        "microphone-alt-slash",
        "suitcase-rolling",
        "trash-restore-alt",
        "save",
        "chess-board",
        "envelope",
        "stopwatch-20",
        "project-diagram",
        "user-lock",
        "highlighter",
        "landmark",
        "graduation-cap",
        "hospital",
        "meh",
        "headset",
        "calendar-check",
        "paste",
        "hand-scissors",
        "print",
        "plane-arrival",
        "sign-language",
        "stamp",
        "crop-alt",
        "user-plus",
        "language",
        "euro-sign",
        "pound-sign",
        "ruler-vertical",
        "mars-stroke",
        "plus-circle",
        "award",
        "baseball-ball",
        "skiing",
        "comment-slash",
        "assistive-listening-systems",
        "less-than-equal",
        "sort-amount-down",
        "map-marked",
        "volume-off",
        "handshake-slash",
        "low-vision",
        "hospital-symbol",
        "flushed",
        "tasks",
        "minus-square",
        "otter",
        "business-time",
        "font-awesome-logo-full",
        "glass-martini",
        "stream",
        "thumbs-up",
        "strikethrough",
        "stroopwafel",
        "cubes",
        "money-bill-wave-alt",
        "chess-knight",
        "house-user",
        "spray-can",
        "fill",
        "reply-all",
        "dollar-sign",
        "download",
        "bacteria",
        "swimmer",
        "motorcycle",
        "warehouse",
        "baby",
        "square-root-alt",
        "satellite",
        "plus-square",
        "vote-yea",
        "file-medical-alt",
        "store-slash",
        "book-dead",
        "hdd",
        "record-vinyl",
        "tired",
        "tooth",
        "store-alt",
        "th-large",
        "truck",
        "cloud-download-alt",
        "at",
        "kiss-beam",
        "grin-stars",
        "images",
        "gopuram",
        "fill-drip",
        "city",
        "money-bill",
        "american-sign-language-interpreting",
        "lemon",
        "server",
        "volume-up",
        "folder",
        "list-ol",
        "user-friends",
        "mountain",
        "satellite-dish",
        "volleyball-ball",
        "coffee",
        "retweet",
        "lira-sign",
        "head-side-mask",
        "wine-glass-alt",
        "grin-squint",
        "vest",
        "journal-whills",
        "user-tie",
        "wifi",
        "trophy",
        "spa",
        "road",
        "umbrella-beach",
        "grin-squint-tears",
        "atlas",
        "hand-lizard",
        "subway",
        "file-powerpoint",
        "thermometer-full",
        "file-audio",
        "hryvnia",
        "heart-broken",
        "heading",
        "pen-square",
        "long-arrow-alt-up",
        "greater-than",
        "cat",
        "grin",
        "gamepad",
        "fire-alt",
        "wave-square",
        "poll-h",
        "hand-point-up",
        "globe",
        "file-download",
        "plane",
        "braille",
        "virus-slash",
        "fighter-jet",
        "walking",
        "rocket",
        "calendar-alt",
        "hard-hat",
        "eraser",
        "seedling",
        "thumbtack",
        "user-edit",
        "bold",
        "snowplow",
        "cloud-meatball",
        "eye-dropper",
        "file-word",
        "skull",
        "file-archive",
        "grin-beam-sweat",
        "surprise",
        "envelope-open-text",
        "parachute-box",
        "hand-pointer",
        "border-all",
        "grin-tears",
        "arrow-alt-circle-right",
        "filter",
        "air-freshener",
        "chess-bishop",
        "file-signature",
        "radiation-alt",
        "fingerprint",
        "dice-five",
        "capsules",
        "user-astronaut",
        "traffic-light",
        "toilet-paper",
        "book",
        "dolly-flatbed",
        "tshirt",
        "asterisk",
        "arrow-up",
        "ambulance",
        "layer-group",
        "female",
        "notes-medical",
        "window-restore",
        "shield-alt",
        "arrow-down",
        "comment-medical",
        "tag",
        "pray",
        "drum",
        "palette",
        "bus-alt",
        "dolly",
        "mosque",
        "torah",
        "venus-mars",
        "bacon",
        "file-medical",
        "battery-three-quarters",
        "reply",
        "toggle-on",
        "hand-holding",
        "outdent",
        "caret-square-right",
        "chess-pawn",
        "wine-bottle",
        "angle-double-left",
        "funnel-dollar",
        "sort",
        "laptop",
        "cart-plus",
        "comments",
        "caret-square-down",
        "golf-ball",
        "car-battery",
        "long-arrow-alt-left",
        "window-maximize",
        "dice-d20",
        "arrow-left",
        "handshake-alt-slash",
        "hashtag",
        "copyright",
        "chevron-circle-left",
        "book-medical",
        "slash",
        "smog",
        "head-side-virus",
        "user-nurse",
        "users-slash",
        "file-upload",
        "kiss-wink-heart",
        "smile",
        "stop-circle",
        "chevron-circle-right",
        "star-of-david",
        "fish",
        "globe-asia",
        "shoe-prints",
        "user-check",
        "user-clock",
        "pills",
        "band-aid",
        "hot-tub",
        "home",
        "user-circle",
        "cookie-bite",
        "calendar-minus",
        "indent",
        "hand-spock",
        "heart",
        "sync",
        "khanda",
        "balance-scale",
        "door-closed",
        "bible",
        "mobile-alt",
        "rupee-sign",
        "file-contract",
        "grimace",
        "crop",
        "equals",
        "crutch",
        "smile-beam",
        "music",
        "directions",
        "carrot",
        "address-card",
        "flask",
        "sms",
        "align-right",
        "ship",
        "meteor",
        "tractor",
        "expand-alt",
        "atom",
        "cloud-sun-rain",
        "cube",
        "object-group",
        "frog",
        "horse-head",
        "sleigh",
        "chart-line",
        "people-carry",
        "horse",
        "train",
        "less-than",
        "step-backward",
        "long-arrow-alt-down",
        "feather-alt",
        "rainbow",
        "frown-open",
        "car-side",
        "copy",
        "comments-dollar",
        "comment-alt",
        "quote-right",
        "table",
        "teeth-open",
        "smile-wink",
        "desktop",
        "fire-extinguisher",
        "rss-square",
        "flag",
        "bullseye",
        "utensils",
        "file-image",
        "utensil-spoon",
        "location-arrow",
        "blender-phone",
        "briefcase",
        "calendar-plus",
        "hands",
        "screwdriver",
        "ankh",
        "leaf",
        "paper-plane",
        "exclamation",
        "search",
        "peace",
        "swatchbook",
        "file",
        "compass",
        "archive",
        "angle-down",
        "user-cog",
        "quidditch",
        "shapes",
        "text-width",
        "chevron-down",
        "angry",
        "route",
        "spinner",
        "ice-cream",
        "gem",
        "font",
        "dizzy",
        "microchip",
        "bed",
        "angle-right",
        "handshake",
        "cheese",
        "caret-up",
        "cash-register",
        "hand-point-left",
        "globe-americas",
        "splotch",
        "vihara",
        "globe-europe",
        "sort-up",
        "volume-down",
        "comment-dollar",
        "snowboarding",
        "heartbeat",
        "medal",
        "wine-glass",
        "closed-captioning",
        "shield-virus",
        "trademark",
        "wrench",
        "transgender",
        "weight",
        "code-branch",
        "puzzle-piece",
        "syringe",
        "hand-sparkles",
        "disease",
        "battery-quarter",
        "dumpster",
        "caravan",
        "microscope",
        "plug",
        "ellipsis-h",
        "list-alt",
        "won-sign",
        "football-ball",
        "bone",
        "laptop-code",
        "chart-bar",
        "sort-alpha-up-alt",
        "user-graduate",
        "mars-stroke-h",
        "soap",
        "headphones",
        "grin-beam",
        "hand-holding-usd",
        "chess-king",
        "sitemap",
        "faucet",
        "stethoscope",
        "id-badge",
        "calendar",
        "yin-yang",
        "sign",
        "hand-middle-finger",
        "tablets",
        "blog",
        "briefcase-medical",
        "diagnoses",
        "poll",
        "user",
        "balance-scale-left",
        "folder-plus",
        "basketball-ball",
        "hand-paper",
        "check-square",
        "circle-notch",
        "grip-vertical",
        "clipboard-check",
        "laugh-squint",
        "sink",
        "charging-station",
        "teeth",
        "chevron-right",
        "cross",
        "toolbox",
        "shopping-cart",
        "not-equal",
        "hands-helping",
        "transgender-alt",
        "truck-pickup",
        "fast-backward",
        "edit",
        "angle-left",
        "compress-alt",
        "user-ninja",
        "mars",
        "crow",
        "thermometer-quarter",
        "grin-alt",
        "hospital-user",
        "bong",
        "trash-alt",
        "hourglass",
        "chair",
        "level-up-alt",
        "angle-double-up",
        "star",
        "prescription-bottle",
        "book-open",
        "lock-open",
        "fire",
        "plane-departure",
        "pause",
        "file-prescription",
        "divide",
        "hospital-alt",
        "tint",
        "headphones-alt",
        "deaf",
        "compress-arrows-alt",
        "hand-peace",
        "sim-card",
        "check-double",
        "bezier-curve",
        "border-none",
        "sort-amount-up",
        "egg",
        "smoking-ban",
        "power-off",
        "bomb",
        "check",
        "sun",
        "grip-lines",
        "biohazard",
        "crosshairs",
        "sort-amount-up-alt",
        "hotel",
        "flag-checkered",
        "paperclip",
        "map-pin",
        "futbol",
        "times-circle",
        "arrow-circle-right",
        "photo-video",
        "bullhorn",
        "cloud-rain",
        "quote-left",
        "gift",
        "boxes",
        "umbrella",
        "undo",
        "user-alt-slash",
        "arrow-alt-circle-left",
        "file-invoice-dollar",
        "address-book",
        "film",
        "external-link-square-alt",
        "school",
        "dice-three",
        "unlock-alt",
        "prescription-bottle-alt",
        "ruler-horizontal",
        "hand-holding-water",
        "hand-holding-heart",
        "jedi",
        "pen-alt",
        "mug-hot",
        "arrow-alt-circle-down",
        "venus-double",
        "vector-square",
        "solar-panel",
        "angle-double-right",
        "shekel-sign",
        "file-export",
        "search-dollar",
        "ad",
        "republican",
        "baby-carriage",
        "grin-tongue",
        "robot",
        "trash",
        "campground",
        "brush",
        "vr-cardboard",
        "beer",
        "eye",
        "place-of-worship",
        "dice-six",
        "chevron-circle-up",
        "cog",
        "folder-open",
        "cart-arrow-down",
        "cannabis",
        "virus",
        "thermometer-half",
        "mars-stroke-v",
        "caret-down",
        "cogs",
        "bug",
        "clipboard",
        "poo",
        "user-md",
        "torii-gate",
        "ban",
        "crown",
        "share-alt-square",
        "passport",
        "certificate",
        "battery-full",
        "expand-arrows-alt",
        "memory",
        "ellipsis-v",
        "temperature-high",
        "exchange-alt",
        "poo-storm",
        "hotdog",
        "mortar-pestle",
        "dice-four",
        "level-down-alt",
        "user-times",
        "mitten",
        "medkit",
        "pastafarianism",
        "chart-pie",
        "chart-area",
        "neuter",
        "adjust",
        "backward",
        "procedures",
        "bahai",
        "tram",
        "fax",
        "gas-pump",
        "sort-alpha-down",
        "snowflake",
        "mars-double",
        "italic",
        "magnet",
        "clinic-medical",
        "receipt",
        "bars",
        "sad-cry",
        "oil-can",
        "wind",
        "igloo",
        "fan",
        "apple-alt",
        "vials",
        "gavel",
        "couch",
        "upload",
        "life-ring",
        "kiss",
        "yen-sign",
        "kaaba",
        "key",
        "pump-medical",
        "terminal",
        "audio-description",
        "stopwatch",
        "envelope-open",
        "toggle-off",
        "keyboard",
        "cloud",
        "voicemail",
        "bowling-ball",
        "male",
        "search-plus",
        "star-and-crescent",
        "file-alt",
        "user-tag",
        "dragon",
        "fast-forward",
        "piggy-bank",
        "laptop-medical",
        "kiwi-bird",
        "arrows-alt-v",
        "object-ungroup",
        "guitar",
        "money-check",
        "clone",
        "menorah",
        "head-side-cough-slash",
        "minus-circle",
        "image",
        "camera",
        "ruler-combined",
        "praying-hands",
        "balance-scale-right",
        "unlock",
        "long-arrow-alt-right",
        "water",
        "hand-point-down",
        "person-booth",
        "calendar-times",
        "chevron-up",
        "paragraph",
        "car-alt",
        "genderless",
        "mercury",
        "spell-check",
        "stop",
        "taxi",
        "backspace",
        "cloud-sun",
        "box-tissue",
        "sort-down",
        "hat-cowboy",
        "caret-square-left",
        "redo",
        "lightbulb",
        "user-minus",
        "file-code",
        "arrow-right",
        "chalkboard-teacher",
        "th-list",
        "skull-crossbones",
        "burn",
        "sign-in-alt",
        "phone",
        "tenge",
        "pen-fancy",
        "users-cog",
        "clock",
        "glass-cheers",
        "magic",
        "file-invoice",
        "map-marker",
        "search-location",
        "sort-alpha-down-alt",
        "shower",
        "caret-left",
        "pager",
        "minus",
        "h-square",
        "broadcast-tower",
        "building",
        "biking",
        "battery-empty",
        "gifts",
        "code",
        "wallet",
        "cut",
        "dot-circle",
        "sort-amount-down-alt",
        "file-csv",
        "hammer",
        "radiation",
        "cloud-moon",
        "search-minus",
        "ring",
        "viruses",
        "prescription",
        "window-minimize",
        "bus",
        "calendar-day",
        "exclamation-circle",
        "share-square",
        "mouse",
        "icicles",
        "store",
        "candy-cane",
        "university",
        "laugh-wink",
        "border-style",
        "file-pdf",
        "chevron-circle-down",
        "forward",
        "eye-slash",
        "info-circle",
        "battery-half",
        "arrow-circle-left",
        "arrows-alt",
        "joint",
        "meh-blank",
        "paint-roller",
        "subscript",
        "car-crash",
        "bacterium",
        "synagogue",
        "tachometer-alt",
        "thermometer-three-quarters",
        "bread-slice",
        "share",
        "pump-soap",
        "clipboard-list",
        "bell-slash",
        "lungs-virus",
        "comment",
        "vial",
        "pizza-slice",
        "mouse-pointer",
        "hat-cowboy-side",
        "laugh-beam",
        "file-import",
        "digital-tachograph",
        "caret-right",
        "trash-restore",
        "star-of-life",
        "glasses",
        "dungeon",
        "external-link-alt",
        "ruble-sign",
        "database",
        "sort-numeric-down",
        "box-open",
        "bookmark",
        "globe-africa",
        "list-ul",
        "users",
        "ticket-alt",
        "truck-monster",
        "space-shuttle",
        "square-full",
        "arrow-alt-circle-up",
        "brain",
        "i-cursor",
        "cookie",
        "pen",
        "table-tennis",
        "flag-usa",
        "money-bill-alt",
        "user-secret",
        "share-alt",
        "om",
        "superscript",
        "drum-steelpan",
        "dove",
        "window-close",
        "tablet-alt",
        "hand-point-right",
        "circle",
        "portrait",
        "running",
        "question",
        "barcode",
        "broom",
        "drumstick-bite",
        "align-center",
        "first-aid",
        "chess-queen",
        "trailer",
        "phone-slash"
    ];

    public function rules()
    {
        return [
            [['icons'], 'required'],
        ];
    }
}