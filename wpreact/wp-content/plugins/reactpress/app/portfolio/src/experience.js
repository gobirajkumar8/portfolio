import React from "react";
//import Accordion from "react-bootstrap/Accordion";
import Paper from "@material-ui/core/Paper";
import Tab from "@material-ui/core/Tab";
import Tabs from "@material-ui/core/Tabs";
import {
  Aspire,
  FirstTek,
  Q4,
  TechinFlo,
  MadeByFire,
  Reussis,
} from "./components/works";

export default function Experence() {
  function getVal(props) {
    switch (props) {
      case 0:
        return <Aspire />;
      case 1:
        return <FirstTek />;
      case 2:
        return <Q4 />;
      case 3:
        return <TechinFlo />;
      case 4:
        return <MadeByFire />;
      case 5:
        return <Reussis />;
      default:
        return "";
    }
  }

  const [value, setValue] = React.useState(0);

  return (
    <section id="experence">
      <div className="container">
        <div className="col-12">
          <div className="gr-contents">
            <h2 className="experence-title section-title">Where I’ve Worked</h2>
            <Paper square>
              <Tabs
                value={value}
                textColor="primary"
                indicatorColor="primary"
                onChange={(event, newValue) => {
                  setValue(newValue);
                }}
              >
                <Tab label="Aspire" />
                <Tab label="FirstTek" />
                <Tab label="Quadrant 4" />
                <Tab label="Techinflo solutions pvt ltd" />
                <Tab label="RaisingIbrows (MadeByFire)" />
                <Tab label="Reussis Info Tech" />
              </Tabs>
              <div className="tabContainer">{getVal(value)}</div>
            </Paper>
          </div>
        </div>
      </div>
    </section>
  );
}
