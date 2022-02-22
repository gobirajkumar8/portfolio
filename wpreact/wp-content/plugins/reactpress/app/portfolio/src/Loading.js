import React from "react";
import "./App.css";

class Loading extends React.Component {
  constructor(props) {
    super(props);
    this.state = { status: "show" };
  }

  componentDidMount() {
    this.timerID = setInterval(() => this.tick(), 2000);
  }

  componentWillUnmount() {
    //    clearInterval(this.setState({ status: "hide" }));
  }

  tick() {
    this.setState({
      status: "hide",
    });
  }

  render() {
    return (
      <div
        className={this.state.status}
        id={this.props.status}
        data-s={this.state.status}
      >
        <div>
          {this.props.status} console.log("test");
          <div id="loader-wrapper" className="w-100 h-100">
            <div id="loader" className="rounded-circle"></div>
            <div className="loader-section section-left"></div>
            <div className="loader-section section-right"></div>
          </div>
        </div>
      </div>
    );
  }
}

export default Loading;
